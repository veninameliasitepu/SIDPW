<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Admin::create([
        	'username' => '24051997',
        	'nama' => 'admin',
        	'password' => bcrypt('admin'),
        	'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
