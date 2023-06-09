<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitModel extends Model
{
    use HasFactory;
    protected $table = 'unit';
    protected $fillable = [
        'description', 
        'department_id',
        'comment',
        'status',
        'added_by',
        'updated_by'
    ];

    public function department()
    {
        return $this->belongsTo(DepartmentModel::class);
    }
}
