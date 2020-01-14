<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class EloquentPegawai extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // data faker indonesia
        $faker = Faker::create('id_ID');

        // membuat data dummy sebanyak 20 record
        for($x = 1; $x <= 20; $x++){

            // insert data dummy pegawai dengan faker
            DB::table('eloquent_pegawai')->insert([
                'nama' => $faker->name,
                'alamat' => $faker->address,
            ]);

        }
    }
}
