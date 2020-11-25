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
            //seeder sudah dimigrate

            // UserSeeder::class,
            // KategoriSeeder::class,
            // SouvenirSeeder::class,
            // KertasDesainSeeder::class,
            // UndanganDetailsSeeder::class,
            // UndanganSeeder::class,
            AcaraSeeder::class,


            //seeder belum dimigrate
            // KategoriDetailsSeeder::class,
        ]);
    }
}
