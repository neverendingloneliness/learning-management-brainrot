<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriMurid extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'materi_id',
        'status_completion'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function materi()
    {
        return $this->belongsTo(Materi::class);
    }
}
