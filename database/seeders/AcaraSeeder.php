<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Acara;

use Faker\Factory as Faker;

class AcaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create('id_ID');
        for ($i=0; $i < 20; $i++) { 
            Acara::create([
                'nama_teman'=>$faker->username,
                'alamat'=>$faker->address,
                'jumlah'=>$faker->numberBetween(30000,100000),
                'waktu'=>$faker->date,
            ]);
        }
    }
}
