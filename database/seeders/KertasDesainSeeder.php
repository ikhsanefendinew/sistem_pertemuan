<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KertasDesain as Desain;
use Faker\Factory as Faker;


class KertasDesainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create('id_ID');
        for ($i=0; $i < 15; $i++) {
            Desain::create([
                'nama'=>$faker->company,
                'harga'=>$faker->numberBetween(800,1000),
            ]);

            
        }
    }
}
