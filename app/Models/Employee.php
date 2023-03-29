<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_id', 
        'title',
        'surname', 
        'first_name', 
        'other_name',
        'date_of_birth',
        'gender',
        'marital_status',
        'phone',
        'official_mail',
        'personal_mail',
        'address',
        'contact_address',
        'nationality',
        'state',
        'lga', 
        'religion',

    ];
}
