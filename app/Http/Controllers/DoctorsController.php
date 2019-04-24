<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctors;

class DoctorsController extends Controller
{
    public function index(){
        $Doctors = Doctors::all();
        if(!$Doctors){
           return response()->json([
              'message' => 'Nenhum registro encontrado',
           ],404);
        }
        return response()->json($Doctors);
    }

    public function show($id){

        $Doctor = Doctors::find($id);
        if(!$Doctor){
           return response()->json([
              'message' => 'Registro não encontrado',
           ],404);
        }
        return response()->json($Doctor);
     }

     public function store(Request $request){

        $Doctor = new Doctors;
        $Doctor->fill($request->all());
        $Doctor->save();
    
        return response()->json($Doctor, 201);
    }

    public function update(Request $request, $id){
        $Doctor = Doctors::find($id);
     
        if(!$Doctor) {
           return response()->json([
              'message' => 'Registro não encontrado',
           ], 404);
        }
     
        $Doctor->fill($request->all());
        $Doctor->save();
     
        return response()->json($Doctor);
    }

}
