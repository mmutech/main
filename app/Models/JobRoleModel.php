<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobRoleModel extends Model
{
    use HasFactory;
    protected $table = 'job_role';
    protected $fillable = [
        'description', 
        'comment',
        'status',
        'added_by'
    ];
}
