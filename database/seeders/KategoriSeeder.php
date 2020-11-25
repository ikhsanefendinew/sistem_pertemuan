<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;
use Faker\Factory as Faker;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create('id_ID');
        for ($i=0; $i < 10; $i++) { 
            kategori::create([
                'nama'=>$faker->name,
                'harga'=>$faker->numberBetween(700, 1000),
                'keterangan_produk'=>$faker->paragraph,
            ]);          
        }
    }
}
