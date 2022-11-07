<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\materials;

class materials_controller extends Controller
{
    public function Materials(Request $request)
    {
        $materialsCode = $request->materialsCode;
        $Materials = materials::where('code_material',$materialsCode)->get();

        return response()->json([  
            'status' => 'success',
            'message' => "Data Materias",   
            'course_foundation' => $Materials
        ]);
    }
}
