<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PegawaisSeeder extends Seeder
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
            DB::table('pegawai')->insert([
                'nama' => $faker->name,
                'email' => $faker->email,
    			'alamat' => $faker->address,
    			'telepon' => $faker->phoneNumber,
    			'pekerjaan' => 'karyawan'
            ]);

        }
    }
}
