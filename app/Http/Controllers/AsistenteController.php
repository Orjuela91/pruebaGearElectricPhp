<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asistente;

class AsistenteController extends Controller
{
    // metodo GET
    public function getAsistentes(Request $request){

        $asistentes = Asistente::all();
        return response()->json($asistentes,200);
    }

    // metodo POST
    public function newAsistente(Request $request){

        $asistente = new Asistente();
        
        $asistente->tipoDocumento = $request->tipoDocumento;
        $asistente->documento = $request->documento;
        $asistente->nombre = $request->nombre;
        $asistente->telefono = $request->telefono;
        $asistente->correo = $request->correo;
        $asistente->save();

        return response()->json("successful",200);
    }
}
