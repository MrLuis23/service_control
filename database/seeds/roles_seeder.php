<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class roles_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
	DB::table('roles')->insert(array(
		'rol' => 'user'
	));	
	DB::table('roles')->insert(array(
		'rol' => 'admin'
	));
    }
}
