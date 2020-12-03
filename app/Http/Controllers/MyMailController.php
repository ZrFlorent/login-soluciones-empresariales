<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyMail;

class MyMailController extends Controller
{
    //
    public function enviarMensaje(Request $request){
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
    
    }

}
