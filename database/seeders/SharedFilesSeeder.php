<?php

namespace Database\Seeders;

use App\Models\SharedFiles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SharedFilesSeeder extends Seeder
{

    public function run(): void
    {
        $data = [
            [
                'nama' => 'Surat Tugas Pendataan SNLIK Januari 2026',
            ],
            [
                'nama' => 'Surat Tugas Pengawasan SNLIK Januari 2026',
            ],
            [
                'nama' => 'Surat Pernyataan Tidak Menggunakan Kendaraan Dinas',
            ],
            [
                'nama' => 'Kerangka Acuan Kerja (KAK)',
            ],
            [
                'nama' => 'Daftar Hadir',
            ],
            [
                'nama' => 'Notulen Rapat',
            ],
            [
                'nama' => 'Format Berita Acara Nonrespon SNLIK',
            ],
            [
                'nama' => 'Surat Pendelegasian Wewenang',
            ],
            [
                'nama' => 'Form Rekap Biaya Paket Data',
            ],
            [
                'nama' => 'Template SPJ Honor',
            ],
            [
                'nama' => 'Template SPJ Transport Lokal',
            ],
            [
                'nama' => 'Perjanjian Kerja',
            ],
        ];

        foreach ($data as $item) {
            SharedFiles::create([
                'nama' => $item['nama'],
                'jenis' => 'Form Template',
            ]);
        }
    }
}
