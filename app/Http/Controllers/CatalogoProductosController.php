<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;

class CatalogoProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        

       if (request()->category) {
        $productos = Product::with('images','category')->whereHas('category', function ($query) {
        $query->where('slug', request()->category);
    })->get();
    $categories = Category::orderBy('nombre')->get();
    $categoriaNombre = $categories->where('slug', request()->category)->first()->nombre;


   }else{
        $productos = Product::inRandomOrder()->take(12)->get();
        $categories = Category::orderBy('nombre')->get();
        $categoriaNombre = "Productos";
   }
    
    return view('Front.CatalogoProductos')->with([
        'productos' => $productos,
        'categories' => $categories,
        'categoriaNombre' =>$categoriaNombre,
    ]);    
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slugp
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $categories = Category::orderBy('nombre')->get();
        $relacion = Product::where('slug', '!=', $slug)->mightAlsoLike()->get();


        $producto = Product::with('images','category')->where('slug',$slug)->firstOrFail();
        return view('Front.Producto')->with([
            'producto' => $producto,
            'relacion' => $relacion,
        ]);
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
