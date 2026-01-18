<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TimKerja extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'master_tim_kerja';

    protected $fillable = [
        'kode_tim',
        'nama_tim',
        'ketua_tim_id',
        'tahun',
    ];

    protected $casts = [
        'tahun' => 'integer',
    ];

    /**
     * Ketua Tim
     * master_tim_kerja.ketua_tim_id -> master_pegawai.id
     */
    public function ketua()
    {
        return $this->belongsTo(Pegawai::class, 'ketua_tim_id', 'id');
    }
}
