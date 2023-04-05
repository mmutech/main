<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deployment extends Model
{
    use HasFactory;

    protected $fillable = [
        'biodata_id',
        'location_id',
        'unit_id',
        'comment',
        'status',
        'deployment_date',
    ];
}
