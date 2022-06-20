<?php

use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $faker = Faker\Factory::create('id_ID');
    for($i = 1; $i <= 30; $i++)
    {
    DB::table('dosen')->insert([
    'nidn' => $faker->nik(),
    'nama' => $faker->name(),
            ]);
        }

    }
}
