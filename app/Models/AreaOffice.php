<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaOffice extends Model
{
    use HasFactory;

    public $fillable = ['location_id', 'description', 'comment', 'status', 'created_by', 'updated_by'];
}
