<?php

use Illuminate\Database\Seeder;

class users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('qwerty1234'),
            'age' => 34,
            'gender' => 'mujer',
            'id_rol' => 2,
        ));	
        DB::table('users')->insert(array(
            'name' => 'user',
            'email' => 'user@example.com',
            'password' => bcrypt('pato1234'),
            'age' => 34,
            'gender' => 'mujer',
            'id_rol' => 1,
            'status' => FALSE,
        ));	
    }
}
