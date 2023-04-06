<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivisionModel extends Model
{
    use HasFactory;
    protected $table = 'division';
    protected $fillable = [
        'description', 
        'comment',
        'status',
        'added_by',
        'updated_by'
    ];
}
