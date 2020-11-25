<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UndanganDetails as Details;
use App\Models\KertasDesain as Kertas;
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
        // $id_kategori = Kategori::pluck('id')->toArray();
        
        for ($i=0; $i < 10; $i++) { 
            $id_kertas=Kertas::pluck('id')->toArray();

            Details::create([
                'nama'=>$faker->firstNameFemale,
                'id_kertas'=>$faker->randomElement($id_kertas),
            ]);

        }

    }
}
