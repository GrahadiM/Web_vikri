<?php

namespace Database\Seeders;

use App\Models\ProfileDosen;
use Illuminate\Database\Seeder;

class ProfileDosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfileDosen::truncate();
        $items = [
            [
                'user_id' => 3,
                'pps' => '',
                'bk' => '',
                'ja' => '',
                'spp' => '',
                'skpi' => '',
                'mk' => '',
                'kmk' => '',
                'total_mahasiswa' => '12',
                'desc' => 'Dosen Tidak Tetap',
                'pa' => 'YA',
            ],
        ];
        
        foreach ($items as $key => $value) {
            ProfileDosen::create($value);
        }
    }
}
