<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentModel extends Model
{
    use HasFactory;
    protected $table = 'department';
    protected $fillable = [
        'description', 
        'division_id',
        'comment',
        'status',
        'added_by',
        'updated_by'
    ];

    public function units()
    {
        return $this->hasMany(UnitModel::class);
    }

    public function division()
    {
        return $this->belongsTo(DivisionModel::class);
    }
}
