<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

        		'name'		=>	'Marvin Aguilar', 			
        		'username'	=>	'admin',
        		'email'		=>	'admin@email.com',
        		'password'	=>	bcrypt('admin')

        ]);
    }
}
