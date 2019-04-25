<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activities;


class ActivitiesController extends Controller
{
    public function index(){
        /*@todo find a way in laravel to get all with associations */
         $activities = Activities::all();
         $ar_activities = [];
         if(!$activities){
            return response()->json([
               'message' => 'Nenhum registro encontrado',
            ],404);
         }
         else{
             foreach($activities as $activity){
                $activity['activity'] = $activity->activity;
                $ar_activities[] = $activity;
             }   
         }
         return response()->json($ar_activities);
     }
 
     public function show($id){
 
         $Activity = Activities::find($id);
         if(!$Activity){
            return response()->json([
               'message' => 'Registro não encontrado',
            ],404);
         }
         return response()->json($Activity);
      }
 
      public function store(Request $request){
 
         $Activity = new Activities;
         $Activity->fill($request->all());
         $Activity->save();
     
         return response()->json($Activity, 201);
     }
 
     public function update(Request $request, $id){
         $Activity = Activities::find($id);
      
         if(!$Activity) {
            return response()->json([
               'message' => 'Registro não encontrado',
            ], 404);
         }
      
         $Activity->fill($request->all());
         $Activity->save();
      
         return response()->json($Activity);
     }
 
     public function destroy($id){
         
         $Activity = Activities::find($id);
     
         if(!$Activity) {
           return response()->json([
              'message' => 'Registro não encontrado!',
           ], 404);
         }
     
         $Activity->delete();
     
         return response()->json([
            'message' => 'Registro deletado',
         ], 200);
     }
}
