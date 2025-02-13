<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kelas', 
        'description'
    ];

    public function materis()
    {
        return $this->hasMany(Materi::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
