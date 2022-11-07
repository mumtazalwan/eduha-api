<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learning_Path_Model;

class Learning_Path_Controller extends Controller
{
    public function index()
    {
        $list = Learning_Path_Model::all();

        return response()->json([
            'status code' => "succes",
            'message' => 'List Learning Path',
            'learning_path' => $list
        ]);
    }
}
