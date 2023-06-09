<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NextOfKin extends Model
{
    use HasFactory;

    protected $fillable = [
        'biodata_id',
        'first_name',
        'surname',
        'phone',
        'email',
        'address',
        'relationship',
    ];
}
