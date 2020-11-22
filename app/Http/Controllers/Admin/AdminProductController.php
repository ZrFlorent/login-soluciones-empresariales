<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\File;



class AdminProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nombre = $request->get('nombre');
        
        $productos = Product::with('images','category')->where('nombre','like',"%$nombre%")->orderBy('nombre')->paginate(10);
        // $categorias = Category::where('nombre','like','%$nombre%')->OrderBy('nombre')->paginate(2);
        return view('adminatir.product.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Category::orderBy('nombre')->get();
        $estado_productos = $this->estado_productos();

        // $categorias = Category::where('nombre','like','%$nombre%')->OrderBy('nombre')->paginate(2);
        return view('adminatir.product.create', compact('categorias','estado_productos'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:products,nombre',
            'slug' => 'required|unique:products,slug',
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        $urlimagenes = [];

        if ($request -> hasFile('imagenes')) {
            # code...
            $imagenes = $request -> file('imagenes');

            foreach($imagenes as $img){
                $nombre = time().'_'.$img -> getClientOriginalName();
                $ruta = public_path('/img');
                $img -> move($ruta , $nombre);
                $urlimagenes[]['url']= '/img/'.$nombre;
            }
            // return $urlimagenes;
        }

        $prod = new Product;

        $prod->nombre =                 $request->nombre;
        $prod->slug =                   $request->slug;
        $prod->category_id =            $request->category_id;
        $prod->cantidad =               $request->cantidad;
        $prod->precio_anterior =        $request->precioanterior;
        $prod->precio_actual =          $request->precioactual;
        $prod->descuento_porcentaje =   $request->porcentajededescuento;
        $prod->descripcion_corta =      $request->descripcion_corta;
        $prod->descripcion_larga =      $request->descripcion_larga;
        $prod->especificaciones =       $request->especificaciones;
        $prod->datos_interes =          $request->datos_de_interes;
        $prod->estado =                 $request->estado;

        if($request->activo){
            $prod-> activo = 'Si';
        }else{
            $prod-> activo = 'No';
        }

        if($request->sliderprincipal){
            $prod-> sliderprincipal = 'Si';
        }else{
            $prod-> sliderprincipal = 'No';
        }
        
        $prod -> save();
        $prod ->images()->createMany($urlimagenes);
        // return $prod ->images;
        return redirect()->route('admin.product.index')->with('datos','Registro creado correctamente');

        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
         //
         $producto = Product::with('images','category')->where('slug',$slug)->firstOrFail();
         $categorias = Category::orderBy('nombre')->get();
         $estado_productos = $this->estado_productos();
         return view('adminatir.product.show', compact('producto', 'categorias','estado_productos')); 
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //
        $producto = Product::with('images','category')->where('slug',$slug)->firstOrFail();
        $categorias = Category::orderBy('nombre')->get();
        $estado_productos = $this->estado_productos();
        return view('adminatir.product.edit', compact('producto', 'categorias','estado_productos')); 
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
        
        $request->validate([
            'nombre' => 'required|unique:products,nombre,'.$id,
            'slug' => 'required|unique:products,slug,'.$id,
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        $urlimagenes = [];

        if ($request -> hasFile('imagenes')) {
            # code...
            $imagenes = $request -> file('imagenes');

            foreach($imagenes as $img){
                $nombre = time().'_'.$img -> getClientOriginalName();
                $ruta = public_path('/img');
                $img -> move($ruta , $nombre);
                $urlimagenes[]['url']= '/img/'.$nombre;
            }
            // return $urlimagenes;
        }

        $prod = Product::findOrFail($id);

        $prod->nombre =                 $request->nombre;
        $prod->slug =                   $request->slug;
        $prod->category_id =            $request->category_id;
        $prod->cantidad =               $request->cantidad;
        $prod->precio_anterior =        $request->precioanterior;
        $prod->precio_actual =          $request->precioactual;
        $prod->descuento_porcentaje =   $request->porcentajededescuento;
        $prod->descripcion_corta =      $request->descripcion_corta;
        $prod->descripcion_larga =      $request->descripcion_larga;
        $prod->especificaciones =       $request->especificaciones;
        $prod->datos_interes =          $request->datos_de_interes;
        $prod->estado =                 $request->estado;

        if($request->activo){
            $prod-> activo = 'Si';
        }else{
            $prod-> activo = 'No';
        }

        if($request->sliderprincipal){
            $prod-> sliderprincipal = 'Si';
        }else{
            $prod-> sliderprincipal = 'No';
        }
        
        $prod -> save();
        $prod ->images()->createMany($urlimagenes);
        // return $prod ->images;
        return redirect()->route('admin.product.index',$prod->slug)->with('datos','Registro modificados correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = Product::with('images')->findOrFail($id);

        foreach($prod->images as $image){
            $archivoimagen = substr($image->url,1);
            File::delete($archivoimagen);
            $image ->delete();
        }
        //return $prod;
         $prod -> delete();

          return redirect()->route('admin.product.index')->with('datos','Producto eliminado');

    }

    public function estado_productos(){
        return [
            '',
            'Nuevo',
            'En Ofera',
            'Popular',
        ];
    }
}
