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
}
