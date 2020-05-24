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

        $data = Tema::paginate(5)->where('user_id', $id)->get();
        return response()->json($data, 200);
    }

    public function show($id)
    {
        return response()->json(Tema::findOrFail($id));
    }
}
