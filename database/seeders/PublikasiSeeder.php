<?php

namespace Database\Seeders;

use App\Models\PublikasiIlmiahDTPS;
use Illuminate\Database\Seeder;

class PublikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PublikasiIlmiahDTPS::truncate();
        $items = [
            [
                'user_id' => 3,
                'jenis' => 'Jurnal',
            ],
            [
                'user_id' => 4,
                'jenis' => 'Jurnal',
            ],
            [
                'user_id' => 5,
                'jenis' => 'Jurnal',
            ],
        ];
        
        foreach ($items as $key => $value) {
            PublikasiIlmiahDTPS::create($value);
        }
    }
}
