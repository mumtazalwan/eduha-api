<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\foundation_material_model;

class course_foundation_model extends Model
{
    use HasFactory;

    public $table = "course_foundation";
    protected $primaryKey = 'id_course';

    public function getFoMaterial()
    {
        return $this->belongsTo(foundation_material_model::class, 'material_id');
    }
}
