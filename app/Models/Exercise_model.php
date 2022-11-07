<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Selection_model;

class Exercise_model extends Model
{
    use HasFactory;
    public $table = 'exercises';
    protected $primaryKey = 'selection';

    public function FoExe()
    {
        return $this->hasMany(Selection_model::class, 'get_selection');
    }
}
