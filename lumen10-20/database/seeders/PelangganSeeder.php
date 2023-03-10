<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Pelanggan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PelangganSeeder extends Seeder
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
                'pelanggan' => $faker->name,
                'alamat' => $faker->address,
                'telp' => $faker->phoneNumber,
            ];
    
            Pelanggan::create($data);
        }
    }
}
