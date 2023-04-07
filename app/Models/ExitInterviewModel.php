<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExitInterviewModel extends Model
{
    use HasFactory;

    protected $table = 'exit_int_question';
    protected $fillable = [
        'comment', 
        'exit_type_id',
        'status',
        'added_by',
        'question',
        'updated_by',
    ];
}
