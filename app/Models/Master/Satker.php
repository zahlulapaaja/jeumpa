<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satker extends Model
{
    use HasFactory;

    protected $table = 'master_satker';

    protected $primaryKey = 'kode_satker';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'kode_provinsi',
        'kode_kabkot',
        'kode_satker',
        'nama_kabkot',
        'nama_satker',
    ];

    /**
     * Satker memiliki banyak pegawai
     * satkers.kode_satker -> master_pegawai.kode_satker
     */
    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'kode_satker', 'kode_satker');
    }

    /**
     * Kepala Satker (opsional)
     * berdasarkan jabatan
     */
    public function kepala()
    {
        return $this->hasOne(Pegawai::class, 'kode_satker', 'kode_satker')
            ->where('jabatan', 'Kepala');
    }
}
