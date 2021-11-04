<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'roll',
        'student_classes_id',
    ];

    public function studentclass()
    {
    return $this->belongsTo(StudentClass::class,'student_classes_id');
    }
}
