<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
   public function run()
    {
         //$this->call(DataSeeder::class); //memanggil class KontakSeeder
         $this->call(AdminTableSeeder::class);
         $this->call(DosenTableSeeder::class);
    }
}
