<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MensajeController extends Controller
{
    //mostrar fomulario 
    public function index(){
        return view('index');
    }

    //(AJAX) guardar mensaje 
   public function guardar(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'email' => 'required|email',
        'mensaje' => 'required'
    ]);

    $nuevoMensaje = [
        'nombre' => $request->nombre,
        'email' => $request->email,
        'mensaje' => $request->mensaje,
        'fecha' => now()->toDateTimeString()
    ];

    $path = 'mensajes.json';

    if (!Storage::exists($path)) {
        Storage::put($path, json_encode([]));
    }

    $contenido = Storage::get($path);
    $mensajes = json_decode($contenido, true);

    if (!$mensajes) {
        $mensajes = [];
    }

    $mensajes[] = $nuevoMensaje;

    Storage::put($path, json_encode($mensajes, JSON_PRETTY_PRINT));

    return response()->json(['success' => true]);
}


    //mostrar

    public function registros()
{
    $path = 'mensajes.json';

    if (Storage::exists($path)) {
        $mensajes = json_decode(Storage::get($path), true);
    } else {
        $mensajes = [];
    }

    return view('registros', compact('mensajes'));
}


}
