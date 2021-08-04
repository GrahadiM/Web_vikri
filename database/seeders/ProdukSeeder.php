<?php

namespace Database\Seeders;

use App\Models\JasaDTPS;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JasaDTPS::truncate();
        $items = [
            [
                'user_id' => 3,
                'produk' => 'Bank Sampah',
                'deskripsi' => 'Bank sampah adalah...',
                'bukti' => 'Sertifikat.pdf',
                'tahun' => '2020',
            ],
            [
                'user_id' => 4,
                'produk' => 'Aplikasi Edukasi',
                'deskripsi' => 'Aplikasi edukasi adalah...',
                'bukti' => 'Sertifikat.pdf',
                'tahun' => '2020',
            ],
            [
                'user_id' => 5,
                'produk' => 'Database',
                'deskripsi' => 'Database adalah...',
                'bukti' => 'Sertifikat.pdf',
                'tahun' => '2020',
            ],
        ];
        
        foreach ($items as $key => $value) {
            JasaDTPS::create($value);
        }
    }
}
