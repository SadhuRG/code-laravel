<?php

namespace App\Http\Controllers;
//use Illuminate\Http\Request;
use Illuminate\Support\facades\Mail;
use App\mail\MensajeRecibido;

class ContactoController extends Controller
{

    public function store(){ 
       $mensaje = request()->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required|min:3',
       ],[
            'nombre.required' => 'Se requiere el ingreso de su nombre',
            'email.required' => 'Se requiere el ingreso de su correo',
            'asunto.required' => 'Se requiere el ingreso de un asunto',
            'mensaje.required' => 'Se requiere el ingreso de un mensaje',
       ]);

       Mail::to('andresrojas1234321@gmail.com')->queue(new MensajeRecibido($mensaje));
       
       return back()->with('estado','Gracias por ponerte en contacto, te responderemos a la brevedad posible');

       //return new MensajeRecibido($mensaje);

       //return 'Mensaje Enviado';
     
       

       //return redirect()->route('contacto')
     
     }

    //
}
