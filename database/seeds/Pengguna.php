<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Pengguna extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 10; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('pengguna')->insert([
    			'nama' => $faker->name,
    		]);
 
    	}
    }
}
