<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Permission::create([
            'name' => 'view courses' // id 1
            ]);
        App\Permission::create([
            'name' => 'create courses' // id 2
            ]);
        App\Permission::create([
            'name' => 'edit courses' // id 3
            ]);
        App\Permission::create([
            'name' => 'update courses' // id 4
            ]);
        App\Permission::create([
            'name' => 'delete courses' // id 5
            ]);
        
        
        $student = App\Role::where('name', 'student')->first();
        $student->permissions()->attach([1]);    
    
        $admin = App\Role::where('name', 'admin')->first();
        $admin->permissions()->attach([1, 2, 3, 4, 5]);
        
    }
}
