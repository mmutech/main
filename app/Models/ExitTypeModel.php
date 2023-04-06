<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExitTypeModel extends Model
{
    use HasFactory;
    protected $table = 'exit_type';
    protected $fillable = [
        'description', 
        'exit_type',
        'status',
        'added_by'
    ];
}
