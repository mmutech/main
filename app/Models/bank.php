<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'bank_name',
        'account_name',
        'account_number',
        'pfa_name',
        'pfa_account_name',
        'rsa',
        'mortgage_account_name',
        'mortgage_account_number',
    ];
}
