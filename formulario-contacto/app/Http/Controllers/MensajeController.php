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
    public function guardar(Request $request){
        $request -> validate ([
        'nombre' => 'required',
        'email' => 'required|email',
        'mensaje' => 'required']);

        $nuevomensaje = [
            'nombre' => $request->nombre,
            'email' => $request->email,
            'mensaje' => $request->mensaje,
            'fecha' => now()->toDateString()
        ];

        $path = 'mensaje.json';

        if(Storage::exists($path)){
            $mensaje = json_decode(Storage::get($path), true);
        }else{
            $mensaje = [];
        }

        $mensaje[] = $nuevomensaje;

        Storage::put($path, json_encode($mensaje, JSON_PRETTY_PRINT));
        return response()->json(['sucess correcto'=>true]);
    }

    //mostrar

    public function registros(){
        $path = 'mensaje.json';
        if(Storage::exists($path)){
            $mensaje = json_decode(Storage::get($path),true);
        }else{
            $mensaje = [];
        }

        return view('registros', compact('mensaje'));
    }

}
