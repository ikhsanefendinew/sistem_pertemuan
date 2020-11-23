<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UndanganDetails as Details;
use Faker\Factory as Faker;


class UndanganDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create('id_ID');


        for ($i=0; $i < 10; $i++) { 
            Details::create([
                'nama'=>$faker->firstNameFemale,
            ]);

        }

    }
}
