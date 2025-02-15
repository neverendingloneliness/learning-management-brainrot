<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roadmap extends Model
{
    use HasFactory;

    protected $fillable = [
        'gambar_roadmap',
        'title_roadmap',
        'deskripsi_roadmap'
    ];

    public function studentRoadmap(){
        return $this->hasMany(StudentRoadmap::class);
    }
}
