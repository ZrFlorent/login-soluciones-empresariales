<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('forms.check');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contents = Cart::content()->map(function ($item) {
            return $item->model->slug.', '.$item->model->precio_actual.'----------------';
        })->values()->toJson();
        $cont = Cart::content()->map(function ($item) {
            return $item->model->slug.', '.$item->model->precio_actual;
        })->values()->toJson();

        $this->validate($request, [
            'nombre' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'direccion' => 'required',
            'mensaje' => 'required',
            'direccion2' => 'required',
            'cp' => 'required',
            'apellido' => 'required'
         ]);
        
        
        
         \Mail::send('forms.confirmar_pedido',
         array(
             'nombre' => $request->get('nombre'),
             'email' => $request->get('email'),
             'telefono' => $request->get('telefono'),
             'mensaje' => $request->get('mensaje'),
             'direccion' => $request->get('direccion'),
             'direccion2' => $request->get('direccion2'),
             'cp' => $request->get('cp'),
             'apellido' => $request->get('apellido'),
             'cardnumber1' => $request->get('cardnumber1'),
             'fe1' => $request->get('fe1'),
             'fe' => $request->get('fe'),
             'contents' => $contents,
             'quantity1' => Cart::total(),
             'quantity' => Cart::instance('default')->count(),



         ), function($message) use ($request)
           {
              $message->from($request->email);
              $message->to('10624@utcv.edu.mx', 'ATIR')
              ->subject('Nuevo pedido ATIR-SHOP');
           });
           Cart::instance('default')->destroy();

/*            return redirect()->back()->with('success','Correo enviado a Servicios ATIR en breve');
 */           return redirect()->route('confirmado.index')->with('success', 'Proceso completado. Servicios ATIR');

    }



    public function storee(CheckoutRequest $request)
    {
        // Check race condition when there are less items available to purchase
        if ($this->productsAreNoLongerAvailable()) {
            return back()->withErrors('Sorry! One of the items in your cart is no longer avialble.');
        }

        $contents = Cart::content()->map(function ($item) {
            return $item->model->slug.', '.$item->qty;
        })->values()->toJson();

        try {
            $charge = Stripe::charges()->create([
                'amount' => getNumbers()->get('newTotal') / 100,
                'currency' => 'CAD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => Cart::instance('default')->count(),
                    'discount' => collect(session()->get('coupon'))->toJson(),
                ],
            ]);

            $order = $this->addToOrdersTables($request, null);
            Mail::send(new OrderPlaced($order));

            // decrease the quantities of all the products in the cart
            $this->decreaseQuantities();

            Cart::instance('default')->destroy();
            session()->forget('coupon');

            return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your payment has been successfully accepted!');
        } catch (CardErrorException $e) {
            $this->addToOrdersTables($request, $e->getMessage());
            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
