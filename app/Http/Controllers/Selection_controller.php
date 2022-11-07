<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Selection_controller extends Controller
{
    public function index()
    {

        $selectionList = DB::table('selection_exercise')
                        ->leftJoin('exercises', 'exercises.id', '=', 'selection_exercise.get_selection')
                        ->select('selection_exercise.id', 'selection_exercise.Text', 'selection_exercise.isCorrect')
                        ->orderBy('selection_exercise.id','asc')
                        ->take(100)
                        ->get();

        return response()->json([
            'status' => 'success',
            'message' => 'Data Selection',   
            'data' => $selectionList
        ]);
    }

}
