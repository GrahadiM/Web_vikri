<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            StatusSeeder::class,
            UsersSeeder::class,
            // ProfileDosenSeeder::class,
            // UsersTableSeeder::class,
            // EWMPSeeder::class,
            // PengakuanSeeder::class,
            // PenelitianSeeder::class,
            // PKMSeeder::class,
            // PublikasiSeeder::class,
            // KaryaIlmiahSeeder::class,
            // ProdukSeeder::class,
            // HKIHakCiptaSeeder::class,
            // HKIHakPatenSeeder::class,
            // HKIBukuBerISBNSeeder::class,
            // HKITeknologiTepatGunaSeeder::class,
        ]);
    }
}
