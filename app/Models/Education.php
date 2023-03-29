<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'institution',
        'course',
        'start_date',
        'end_date',
    ];

    //protected $nullable = ['course'];
}
