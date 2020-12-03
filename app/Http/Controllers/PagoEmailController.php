<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;

class PagoEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! session()->has('success')) {
            return redirect('/');
        }

        return view('forms.finalcompra');
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
/* 233 */
$this->validate($request, [
    'nombre' => 'required',
    'email' => 'required|email',
    'telefono' => 'required',
    'asunto' => 'required',
    'mensaje' => 'required'
 ]);



 \Mail::send('forms.confirmar_pedido',
 array(
     'nombre' => $request->get('nombre'),
     'email' => $request->get('email'),
     'asunto' => $request->get('asunto'),
     'telefono' => $request->get('telefono'),
     'mensaje' => $request->get('mensaje'),
 ), function($message) use ($request)
   {
      $message->from($request->email);
      $message->to('10624@utcv.edu.mx', 'ATIR')
      ->subject('Solicitud de informes VERIFICACION  de productos GIA');
   });
 
//  return back()->with('success', 'Thank you for contact us!');
/*         return redirect()->back() ->with('alert', 'Updated!');
 */
        return redirect()->back()->with('success','Correo enviado a Servicios ATIR en breve');




        /* 1 
        $this -> validate($request, [
            'nombre' => 'required', 
            'correo' => 'required',
            'subject' => 'required',
            'content'=> 'required',
        ]);
        
        
        $myMail = new MyMail(
            $request->input('nombre'),
            $request->input('correo'),
            $request->input('subject'),
            $request->input('content')

        );

        
     Mail::to('10624@utcv.edu.mx')->send($myMail);
    //  return back()->with('success', 'Thanks for contacting us!');
    //     Mail::to($request->input('email'))->send($myMail);
        return redirect()->back()->with('success','Correo enviado a Servicios ATIR en breve');
    */
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
