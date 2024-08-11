<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Correo;

class MailController extends Controller {
    public function send(Request $request) {
        $nombre = $request->nombre;
        $correo = $request->correo;
        $mensaje = $request->mensaje;
        
        $data = [
            'nombre' => $nombre,
            'mensaje' => $mensaje
        ];
        Mail::to($correo)->send(new Correo($data));
    }
}
