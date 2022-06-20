<?php

use Illuminate\Database\Seeder;

class MhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');
        for ($i= 1; $i<= 100; $i++){
            DB::table('mahasiswa')->insert([
                'nim'=> $faker-> randomNumber(8, true),
                'nama' => $faker-> name(),
                'gender' => $faker-> title(),
                'jurusan' => $faker-> suffix(),
                'bidang_minat' => $faker-> jobTitle()
            ]);
        }
    }
}
