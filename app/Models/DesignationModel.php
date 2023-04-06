<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignationModel extends Model
{
    use HasFactory;
    protected $table = 'designation';
    protected $fillable = [
        'description', 
        'comment',
        'status',
        'added_by',
        'updated_by'
    ];
}
