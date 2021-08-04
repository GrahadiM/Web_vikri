<?php

namespace Database\Seeders;

use App\Models\PKMDTPS;
use Illuminate\Database\Seeder;

class PKMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PKMDTPS::truncate();
        $items = [
            [
                'user_id' => 3,
                'sumber' => 'Fakultas Ilmu Komputer Universitas Esa Unggul',
                'total_judul' => '3',
            ],
            [
                'user_id' => 4,
                'sumber' => 'Fakultas Ilmu Komputer Universitas Esa Unggul',
                'total_judul' => '6',
            ],
            [
                'user_id' => 5,
                'sumber' => 'Fakultas Ilmu Komputer Universitas Esa Unggul',
                'total_judul' => '1',
            ],
        ];
        
        foreach ($items as $key => $value) {
            PKMDTPS::create($value);
        }
    }
}
