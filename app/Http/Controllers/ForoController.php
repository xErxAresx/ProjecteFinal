<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tema;
use App\User;
use App\Respuesta;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class ForoController extends Controller
{
    //Funcion que retorna todos los temas del foro
    public function getIndex() 
    {
        $temas=Tema::all();
        $users=User::all();
        return view('home.foro', array('temas'=> $temas), array('users' => $users));
    }

    //Funcion que retorna el formulario para crear un tema nuevo
    public function show() {
        return view('temas.crearTema');
    }

    //Funcion que muetra un tema y sus respuestas
    public function showTema($id) {
        
        $tema=Tema::findOrFail($id);
        $respuestas=Respuesta::all();
        return view('temas.mostrarTema', array('tema'=>$tema), array('respuestas'=>$respuestas));
    }

    //Funcion que devuelve la view del perfil de un uusario
    public function getPerfil($id) {

        $user = User::findOrFail($id);
        return view('perfil.perfil', array('user' => $user));
    }

    //Funcion que devuelve el formulario para editar el perfil
    public function getEditPerfil($id) {

        $user = User::findOrFail($id);
        return view('perfil.editPerfil',array('user'=>$user));
    }

    //Funció pero modificar el perfil d'usuari
    public function putEditPerfil(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->nombre = $request['nombre'];
        $user->nombreUsuario = $request['nombreUsuario'];
        $user->email = $request->input('email');
        $user->save();

        return $this->getPerfil($id);
    }

    //Funcion que crear una nueva respuesta
    public function createRespuesta($id) {
        $user = auth()->user()->id;
        $iduser = Auth::id();
        $fecha = date('d-m-Y');
        Respuesta::create([
            'tema_id' => $id,
            'user_id' => $iduser,
            'respuesta' => $request['respuesta'],
            'fecha' => $fecha
        ]);

        return redirect('/foro/mostrar/'.$id);
    }

    //Funcio per editar una resposta
    public function putEditRespuesta($id) {

        $user = Auth::user();
        $respuesta = Respuesta::all();
    }

    //Funcion para retornar el formulario del edit de una respuesta
    public function getEditRespuesta($idTema,$idRespuesta) {
        
    }

    //Funcion para editar una respuesta echa por el mismo usuario
    //public function editRespuesta($id)

    //Funcion que crea un nuevo tema en el foro
    public function postCrearTema(Request $request) {
        
        $fecha = date('d-m-Y');
        $t = new Tema;
        $t->titulo = $request['titulo'];
        $t->user_id = Auth::user()->id;
        $t->texto = $request['texto'];
        $t->fecha = $fecha;
        $t->save();

        return redirect('/foro');
    }

    //Función que retorna el formulario para eliminar temas
    public function getDeleteTema($id){

        $tema = Tema::findOrFail($id);
        return view('home.eliminarTema', array('tema'=>$tema));
    }

    public function update() {

    }

    public function destroy(Request $request, $id) {

        $fecha = date('d-m-Y');
        $user = Auth::user();
        $tema=Tema::findOrFail($id);
        $user_id = $user->id;
        $titulo = $tema->titulo;
        $texto = $tema->texto;
        $motivo = $request['motivo'];
        $data=array('user_id'=>$user_id, 'titulo'=>$titulo, 'texto'=>$texto, 'motivo'=>$motivo, 'fecha'=>$fecha);
        DB::table('control_taula')->insert($data);
        $respuestas = Respuesta::all();
        $respuestas = $respuestas->where('tema_id','=',$tema->id);
        foreach ($respuestas as $respuesta){ 
            $respuesta->delete();
            }
        
        $tema->delete();

        return redirect('/foro');
    }
}
