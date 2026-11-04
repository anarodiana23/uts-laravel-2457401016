<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis',
        'name',
        'classroom',
        'birth_date',
        'average_score',
        'address',
        'parent_phone',
        'is_active'
    ];
}
