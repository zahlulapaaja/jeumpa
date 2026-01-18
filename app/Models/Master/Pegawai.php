<?php

namespace App\Models\Master;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pegawai extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'master_pegawai';

    protected $fillable = [
        'nama',
        'email',
        'nip_lama',
        'nip_baru',
        'nik',
        'golongan',
        'pangkat',
        'jabatan',
        'no_rek',
        'nama_bank',
        'an_rek',
        'no_hp',
        'catatan',
    ];

    /**
     * master_pegawai.id -> users.pegawai_id
     */
    public function user()
    {
        return $this->hasOne(User::class, 'pegawai_id', 'id');
    }

    public function satker()
    {
        return $this->belongsTo(Satker::class, 'kode_satker', 'kode_satker');
    }

    /**
     * Pegawai sebagai Ketua Tim
     * master_pegawai.id -> master_tim_kerja.ketua_tim_id
     */
    public function timYangDipimpin()
    {
        return $this->hasMany(TimKerja::class, 'ketua_tim_id', 'id');
    }
}
