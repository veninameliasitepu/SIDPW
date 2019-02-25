<?php

use Illuminate\Database\Seeder;

class DosenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Dosen::create([
        	'NIP' => '12345678',
        	'nama' => 'penina',
        	'password' => bcrypt('dosen')
        ]);
    }
}
