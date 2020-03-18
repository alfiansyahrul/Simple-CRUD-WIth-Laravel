<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Role::create([
            'name' => 'student'
        ]);

        App\Role::create([
        'name' => 'admin'
        ]);
    }
}