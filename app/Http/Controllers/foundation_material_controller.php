<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\foundation_material_model;
use App\Models\exercise_model;

class foundation_material_controller extends Controller
{
    public function FoMaterial(Request $request)
    {
        $submaterialId = $request->submaterialId;
        
        $FoMaterial = foundation_material_model::where('get_submaterial', $submaterialId)->get();
        $Exercise = Exercise_model::with('FoExe')->where('idExercise','=',$submaterialId)->get();

        return response()->json([  
            'status' => 'success',
            'message' => "Data Foundation Material",   
            'course_foundation' => $FoMaterial,
            'exercise' => $Exercise
        ]);
    }
}
