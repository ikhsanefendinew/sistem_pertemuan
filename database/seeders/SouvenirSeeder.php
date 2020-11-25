<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Souvenir;
use Faker\Factory as Faker;
use App\Models\Kategori;

class SouvenirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker= Faker::create('id_ID');
        for($i=0; $i < 10; $i++) { 
            # code...
            $id_kategori = Kategori::pluck('id')->toArray();
            Souvenir::create([
                'nama'=>$faker->firstNameMale,
                'jumlah_pesanan'=>$faker->numberBetween(50, 500),
                'id_pembayaran'=>$faker->numberBetween(1, 10),
                'id_kategori'=>$faker->randomElement($id_kategori),            
            ]);
        }
    }
}
