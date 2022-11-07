<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\materials;
use App\Models\exercise;

class foundation_material_model extends Model
{
    use HasFactory;

    public $table = 'foundation_materials';
    public $primaryKey = 'get_submaterial';

    public function getMaterials()
    {
        return $this->belongsTo(materials::class, 'code_material');
    }
}
