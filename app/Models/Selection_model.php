<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Exercise_model;

class Selection_model extends Model
{
    use HasFactory;

    public $table = 'selection_exercise';
    protected $primaryKey = 'get_selection';

    public function selectioN()
    {
        return $this ->belongsTo(Exercise_model::class);
    }
}
