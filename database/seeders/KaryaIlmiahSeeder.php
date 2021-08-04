<?php

namespace Database\Seeders;

use App\Models\KaryaIlmiahDTPS;
use Illuminate\Database\Seeder;

class KaryaIlmiahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KaryaIlmiahDTPS::truncate();
        $items = [
            [
                'user_id' => 3,
                'judul' => 'Bank Sampah',
            ],
            [
                'user_id' => 4,
                'judul' => 'Aplikasi Edukasi',
            ],
            [
                'user_id' => 5,
                'judul' => 'Database',
            ],
        ];
        
        foreach ($items as $key => $value) {
            KaryaIlmiahDTPS::create($value);
        }
    }
}
