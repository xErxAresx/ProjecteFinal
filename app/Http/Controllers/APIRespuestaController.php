<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Respuesta;

class APIRespuestaController extends Controller
{
    public function index()
    {
        return response()->json(Respuesta::all());
    }

    public function userRespuestas($id) {
        
        $data = Respuesta::where('user_id', $id)->get();
        return response()->json($data, 200);
    }

    public function show($id)
    {
        return response()->json(Respuesta::findOrFail($id));
    }

}
