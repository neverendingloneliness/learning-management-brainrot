<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Materi extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_materi',
        'video_url',
        'pdf_url',
        'kelas_id'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function materiMurids()
    {
        return $this->hasMany(MateriMurid::class);
    }
}
