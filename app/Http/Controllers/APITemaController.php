<?php

namespace App\Http\Controllers;

use App\Tema;
use Illuminate\Http\Request;

class APITemaController extends Controller
{
    //Funció que retorna tots els temes
    public function index()
    {
        return response()->json(Tema::all());
    }

    //Funció que retorna els temes d'un usuari en concret
    public function userTemas($id) {

        $data = Tema::where('user_id', $id)->get();
        return response()->json($data, 200);
    }

    //Funció que retorna un sol tema
    public function show($id)
    {
        return response()->json(Tema::findOrFail($id));
    }
}
