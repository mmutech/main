<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeLevelModel extends Model
{
    use HasFactory;
    protected $table = 'grade_level';
    protected $fillable = [
        'description',
        'monthly_gross',
        'designation_id', 
        'comment',
        'status',
        'added_by'
    ];
}
