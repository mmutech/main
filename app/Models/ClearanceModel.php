<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClearanceModel extends Model
{
    use HasFactory;
    protected $table = 'clearance';
    protected $fillable = [
        'comment', 
        'added_by',
        'clr_status',
        'cleared_by',
        'clr_date',
        'unit_dept',
        'updated_by'
    ];
}
