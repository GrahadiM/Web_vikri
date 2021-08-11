<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $user = [
            [
                'name' => 'Admin',
                'role_id' => 1,
                'nidn' => '01',
                'status_id' => 1,
                'gender' => 'Pria',
                'image' => 'user.png',
                'email' => 'admin@test.com',
                'username' => 'admin',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
                'email_verified_at' => '2021-06-09 20:19:13',
            ],
            [
                'name' => 'Staff',
                'role_id' => 2,
                'nidn' => '001',
                'status_id' => 1,
                'gender' => 'Pria',
                'image' => 'user.png',
                'email' => 'staff@test.com',
                'username' => 'staff',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
                'email_verified_at' => '2021-06-09 20:19:13',
            ],
            [
                'name' => 'Dosen',
                'role_id' => 3,
                'nidn' => '12345',
                'status_id' => 1,
                'gender' => 'Pria',
                'image' => 'user.png',
                'email' => 'dosen@test.com',
                'username' => 'dosen',
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(60),
                'email_verified_at' => '2021-06-09 20:19:13',
            ],
        ];
        
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
