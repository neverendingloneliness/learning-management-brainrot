<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRoadmap extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'roadmap_id'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function roadmap()
    {
        return $this->belongsTo(Roadmap::class);
    }
}
