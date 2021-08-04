<?php

namespace Database\Seeders;

use App\Models\PenelitianDTPS;
use Illuminate\Database\Seeder;

class PenelitianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PenelitianDTPS::truncate();
        $items = [
            [
                'user_id' => 3,
                'sumber' => 'Fakultas Universitas Esa Unggul',
                'total_judul' => '3',
            ],
            [
                'user_id' => 4,
                'sumber' => 'Fakultas Universitas Esa Unggul',
                'total_judul' => '6',
            ],
            [
                'user_id' => 5,
                'sumber' => 'Fakultas Universitas Esa Unggul',
                'total_judul' => '1',
            ],
        ];
        
        foreach ($items as $key => $value) {
            PenelitianDTPS::create($value);
        }
    }
}
