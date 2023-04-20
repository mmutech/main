<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExitInitModel extends Model
{
    use HasFactory;
    protected $table = 'exit_initiation';
    protected $fillable = [
        'comment', 
        'exit_type_id',
        'status',
        'added_by',
        'rdate',
        'ldate',
        'updated_by',
        'upload',
        'overallStatus',
        'adminComment'
    ];
}
