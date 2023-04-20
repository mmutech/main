<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    public $fillable = [
        'staff_id',
        'title',
        'nationaIDNumber',
        'surname',
        'first_name',
        'other_name',
        'gender',
        'date_of_birth',
        'marital_status',
        'phone',
        'official_email',
        'personal_email',
        'nationality',
        'address',
        'contact_address',
        'state',
        'lga',
        'religion',
        'disability_status',
        'disability_type',
        'criminal_record',
        'debt_status',
        'grade_level',
        'job_role',
        'created_by',
        'updated_by',
    ];
}
