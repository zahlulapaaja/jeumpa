<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kegiatan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'master_kegiatan';

    protected $fillable = [
        'nama_kegiatan',
        'tim_kerja',
        'pj',
        'tanggal_mulai',
        'tanggal_selesai',
        'tahun',
        'status',
        'deskripsi',
    ];

    protected $casts = [
        'tanggal_mulai'   => 'date',
        'tanggal_selesai' => 'date',
        'tahun'           => 'integer',
    ];
}
