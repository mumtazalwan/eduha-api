<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise_model;
use App\Models\Selection_model;

class ExerciseController extends Controller
{
    public function index()
    {

        $submaterialId = $request->submaterialId;

        $spec = Exercise_model::with('FoExe')->where('FoExe.idExercise','=',$submaterialId)->get();

        return response()->json([  
            'status' => '200',
            'message' => 'List of Selection',   
            'data' => $spec
        ]);
    }
}

