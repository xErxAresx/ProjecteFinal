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
        
        $data = Respuesta::all();
        $data = $data->where('user_id', '=', $id);
        return response()->json($data);
    }

    public function show($id)
    {
        return response()->json(Respuesta::findOrFail($id));
    }

}
