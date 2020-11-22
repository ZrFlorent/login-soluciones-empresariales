<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;


class AutocompleteController extends Controller
{
    public function autocompletar(Request $req){
        $buscarpalabra = $req->get('buscarpalabra');
        $productos = Product::where('nombre','like','%'.$buscarpalabra.'%')->orderBy('nombre')->get();
        
        $resultado =[];
        foreach($productos as $prod){
            $encontrarTexto = stristr($prod->nombre, $buscarpalabra);
            $prod->encontrar = $encontrarTexto;
            $recortarpalabra = substr($encontrarTexto, 0, strlen($buscarpalabra));
            $prod->substr =  $recortarpalabra;

            $prod->nombre_negrita = str_ireplace($buscarpalabra, "<b>$recortarpalabra</b>", $prod->nombre);
            $resultado[]=$prod;
        }

        return $resultado;
    }
}
