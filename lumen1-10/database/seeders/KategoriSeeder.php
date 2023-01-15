<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        for ($i=0; $i < 10; $i++) { 
            $data = [
                'kategori' => $faker->city,
                'keteranggan' => $faker->text
            ];
    
            Kategori::create($data);
        }
        
    }
}
