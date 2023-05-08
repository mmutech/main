<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LeaveType;

class LeaveApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'leave_type',
        'employee_id',
        'start_date',
        'end_date',
        'number_of_days_taken',
        'reliever',
        'reason',
        'approved_by',
        'status',
    ];

    protected $nullable = ['reason', 'status', 'approved_by'];

}
