<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
class IndexController extends Controller
{
    public function getProductos($category_id){
        
        // $category_id = 10;
       // $prod = Product::with('images','category')->where('sliderprincipal','=',"Si")->orderBy('id')->get();
       $categorias = Category::orderBy('nombre')->get();
       $cat = Product::with('images','category')->where('category_id', $category_id )->orderBy('id')->get();

        
       // $productos = Product::with('images','category')->where('activo','=',"Si")->orderBy('nombre');
        // $categorias = Category::where('nombre','like','%$nombre%')->OrderBy('nombre')->paginate(2);
        return $cat;
    }
    public function getCategory()
    {
        $categorias = Category::orderBy('nombre')->get();

        $principal = Product::with('images','category')->where('sliderprincipal','=',"Si")->orderBy('id')->get();

        $prod = Product::with('images','category')->where('activo','=',"Si")->orderBy('nombre')->get();

        $cat = Category::OrderBy('nombre')->get();

        return view('index', compact('cat', 'prod','principal'));

    }
  
    public function getCatalogoProductos()
    {
        $prod = Product::with('images','category')->where('activo','=',"Si")->orderBy('nombre')->get();
        $categories = Category::orderBy('nombre')->get();

       return view('Front.CatalogoProductos', compact('categories', 'prod'));
    }
    public function index()
    {


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

    public function Blog() {
        return view('Blog.Blog_salud_proteccion');
    }
    public function BlogMenu() {
        return view('Blog.blog_Menu');
    }
    public function Blog1() {
        return view('Blog.blog1');
    }
     public function Blog2() {
        return view('Blog.blog2');
    }
      public function Blog3() {
        return view('Blog.blog3');
    }
     public function Blog4() {
        return view('Blog.blog4');
    }
}
