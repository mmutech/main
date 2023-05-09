<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LeaveType;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    //protected $nullable = ['reason', 'status', 'approved_by'];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Biodata::class);
    }

    public function leaveType(): BelongsTo
    {
        //return $this->belongsTo(LeaveType::class);
        return $this->belongsTo(LeaveType::class, 'leave_type', 'id');
    }

}
