<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Image;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    public function index()
    {
        //
        // $cat = new Product();
        // $cat->nombre        ='Hombre';
        // $cat->slug          ='hombre';
        // $cat->descripcion   ='Ropa de hombre';
        // $cat->save();
        // return $cat;  
        return Product::all();


    }

    public function show($slug)
    {
        if(Product::where('slug', $slug)->first()){
        return "Slug existe";
    }
    else{
        return "Slug Disponible";
    }
        //
    }
    public function eliminarimagen($id){
        $image = Image::find($id);
        $archivoimagen = substr($image->url,1);
        $eliminarimagen = File::delete($archivoimagen);
        $image ->delete();
        return "Imagen eliminada".$id.' '.$eliminarimagen;
    }

}
