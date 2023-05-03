<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feeder extends Model
{
    use HasFactory;

    public $fillable = [
        'area_office_id', 
        'description', 
        'comment', 
        'status', 
        'created_by', 
        'updated_by'
    ];
}
