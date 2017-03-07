<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Registro;
use App\Usuario;
use Validator;
use Response;
use Flash;

use Illuminate\Support\Facades\Input;

class RegistroController extends Controller
{
    public function index(){

      // we need to show all data from "registro" table
      $registros = Registro::all()->sortByDesc('created_at');
      
      // show data to our view

        

          $activos = Usuario::all();       



      

     // $activos = Usuario::documento($respuesta->documento);
    // $activos = Usuario::documento($respuesta->get('documentobus'));
      //return view('gym.index',['registros' => $registros, 'users' => $activos]);
      
      return view('gym.index')->with('registros', $registros)->with('users', $activos)->with('message1', '');;
    }



      // edit data function
      public function editItem(Request $req) {
      $registro = Registro::find ($req->id);
      $registro->documento = $req->documento;
      $registro->email = $req->email;
      $registro->save();
      return response()->json($registro);
    }

    // add data into database
    public function addItem(Request $req) {
      $rules = array(
        'documento' => 'required',
        'email' => 'required'
      );
      // for Validator
      $validator = Validator::make ( Input::all (), $rules );
      if ($validator->fails())
      return Response::json(array('errors' => $validator->getMessageBag()->toArray()));

      else {
        $registro = new Registro();
        $registro->documento = $req->documento;
        $registro->email = $req->email;
        $registro->modulo = $req->modulo;
        $registro->save();
        
       
        return response()->json($registro);
       // return view('gym.index',['registros' => $registros]);
      }
    }
    // delete item
    public function deleteItem(Request $req) {
      Registro::find($req->id)->delete();
      return response()->json();
    }

    public function search($search)
    {
      $registros = Registro::all()->sortByDesc('created_at');
      $search = urldecode($search);
      $activos = Usuario::select()
        ->where('codigo', 'LIKE', $search)
        ->get();

        if (count($activos) == 0){
          return view('gym.index')->with('registros', $registros)->with('message', 'Usuario no Encontrado');
        } else {
          return view('gym.index')->with('registros', $registros)->with('users', $activos);
        }
    }

      public function show(Request $req) {
      $registro = Registro::find ($req->id);
      
      return response()->json($registro);
    }

}
