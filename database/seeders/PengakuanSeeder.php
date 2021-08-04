<?php

namespace Database\Seeders;

use App\Models\PengakuanDTPS;
use Illuminate\Database\Seeder;

class PengakuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PengakuanDTPS::truncate();
        $items = [
            [
                'user_id' => 3,
                'keahlian' => 'Web Development',
                'bukti' => 'Sertifikat.pdf',
                'tingkat' => '3',
            ],
            [
                'user_id' => 4,
                'keahlian' => 'App Development',
                'bukti' => 'Sertifikat.pdf',
                'tingkat' => '1',
            ],
            [
                'user_id' => 5,
                'keahlian' => 'Database Analisis',
                'bukti' => 'Sertifikat.pdf',
                'tingkat' => '1',
            ],
        ];
        
        foreach ($items as $key => $value) {
            PengakuanDTPS::create($value);
        }
    }
}
