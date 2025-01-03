<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Tanya extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = [
        'nama_lengkap',
        'email',
        'sekolah',
        'fase',
        'kelas',
        'mapel',
        'bab',
        'pertanyaan',
        'image_tanya',
        'no_hp',
        'jam_tanya',
        'jam_jawab',
        'mentor',
        'id_mentor',
        'email_mentor',
        'asal_mengajar',
        'jawaban',
        'image_jawab',
        'status',
        'alasan_ditolak'
    ];

    protected $dates = ['created_at'];
}
