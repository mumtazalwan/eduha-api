<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course_foundation_model;

class Course_foundation_Controller extends Controller
{
    public function Cofoundation(Request $request)
    {
        $idCourse = $request->idCourse;
        $Cofoundation = course_foundation_model::where('id_course', $idCourse)->get();

        return response()->json([  
            'status' => 'success',
            'message' => "Data Course Foundation",   
            'course_foundation' => $Cofoundation
        ]);
    }
}
