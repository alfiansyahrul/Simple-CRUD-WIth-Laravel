<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\User::create([
            'name' => 'Joko Anwar',
            'email' => 'Joko@gmail.com',
            'password' => bcrypt('password'),
            'phone' => 12345,
            'role_id' => 1
     ]);
     
     App\User::create([
            'name' => 'Thomas Alfhabet',
            'email' => 'Thomas@gmail.com',
            'password' => bcrypt('password'),
            'phone' => 12345,
            'role_id' => 2
     ]);
         
    }
}
