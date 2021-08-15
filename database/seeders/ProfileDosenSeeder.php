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
                'total_mahasiswa' => '42',
            ],
            [
                'user_id' => 4,
                'total_mahasiswa' => '36',
            ],
        ];
        
        foreach ($items as $key => $value) {
            ProfileDosen::create($value);
        }
    }
}
