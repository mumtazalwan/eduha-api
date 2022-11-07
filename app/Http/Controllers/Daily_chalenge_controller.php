<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daily_chalenge_model;

class Daily_chalenge_controller extends Controller
{
    public function DailyChalenge()
    {
        $list = Daily_chalenge_model::all();

        return response()->json([
            'status code' => "succes",
            'message' => 'Daily Chalenge',
            'learning_path' => $list
            ]);       
    }
}
