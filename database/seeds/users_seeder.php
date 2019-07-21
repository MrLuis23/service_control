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
    }
}
