<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::truncate();
        $status = [
            [
                'name' => 'active',
            ],
            [
                'name' => 'non-active',
            ],
            [
                'name' => 'banned',
            ],
        ];
        
        foreach ($status as $key => $value) {
            Status::create($value);
        }
    }
}
