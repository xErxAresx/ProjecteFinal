<?php

namespace App\Http\Controllers;

use App\Tema;
use Illuminate\Http\Request;

class APITemaController extends Controller
{
    public function index()
    {
        return response()->json(Tema::all());
    }

    public function userTemas($id) {

        $data = Tema::all();
        $data = $data->where('user_id', '=', $id);
        return response()->json($data);
    }

    public function show($id)
    {
        return response()->json(Tema::findOrFail($id));
    }
}
