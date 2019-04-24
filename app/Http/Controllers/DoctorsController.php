<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctors;

class DoctorsController extends Controller
{
    public function index(){
       /*@todo find a way in laravel to get all with associations */
        $doctors = Doctors::all();
        $ar_doctors = [];
        if(!$doctors){
           return response()->json([
              'message' => 'Nenhum registro encontrado',
           ],404);
        }
        else{
            foreach($doctors as $doctor){
               $doctor['activity'] = $doctor->activity;
               $ar_doctors[] = $doctor;
            }   
        }
        return response()->json($ar_doctors);
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

    public function destroy($id){
        
        $Doctor = Doctors::find($id);
    
        if(!$Doctor) {
          return response()->json([
             'message' => 'Registro não encontrado!',
          ], 404);
        }
    
        $Doctor->delete();
    
        return response()->json([
           'message' => 'Registro deletado',
        ], 200);
    }

}
