<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Souvenir;
use Faker\Factory as Faker;

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
            Souvenir::create([
                'nama'=>$faker->firstNameMale,
                'nama'=>$faker,
                'nama'=>$faker,
            ]);
        }
    }
}
