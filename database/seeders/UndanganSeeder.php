<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Undangan;
use App\Models\UndanganDetails as Details;
use Faker\Factory as Faker;

class UndanganSeeder extends Seeder
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
            $id_desain=Details::pluck('id')->toArray();
            Undangan::create([
                'nama'=>$faker->firstNameMale,
                'waktu'=>$faker->date,
                'kode_barcode'=>$faker->numberBetween(1,10),
                'id_desain'=>$faker->randomElement($id_desain),
            ]);

        }
    }
}
