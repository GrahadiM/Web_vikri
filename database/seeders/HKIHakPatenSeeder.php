<?php

namespace Database\Seeders;

use App\Models\HKIHakPaten;
use Illuminate\Database\Seeder;

class HKIHakPatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HKIHakPaten::truncate();
        $items = [
            [
                'user_id' => 3,
                'pkm' => 'Fakultas Universitas Esa Unggul',
                'tahun' => '2021',
                'ket' => 'PKM yang diadakan oleh Fakultas Ilmu Komputer Universitas Esa Unggul',
            ],
            [
                'user_id' => 4,
                'pkm' => 'Fakultas Universitas Esa Unggul',
                'tahun' => '2021',
                'ket' => 'PKM yang diadakan oleh Fakultas Ilmu Komputer Universitas Esa Unggul',
            ],
            [
                'user_id' => 5,
                'pkm' => 'Fakultas Universitas Esa Unggul',
                'tahun' => '2021',
                'ket' => 'PKM yang diadakan oleh Fakultas Ilmu Komputer Universitas Esa Unggul',
            ],
        ];
        
        foreach ($items as $key => $value) {
            HKIHakPaten::create($value);
        }
    }
}
