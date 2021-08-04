<?php

namespace Database\Seeders;

use App\Models\EWMPDTPT;
use Illuminate\Database\Seeder;

class EWMPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EWMPDTPT::truncate();
        $items = [
            [
                'user_id' => 3,
                'total_sks' => '3',
            ],
            [
                'user_id' => 4,
                'total_sks' => '12',
            ],
            [
                'user_id' => 5,
                'total_sks' => '6',
            ],
        ];
        
        foreach ($items as $key => $value) {
            EWMPDTPT::create($value);
        }
    }
}
