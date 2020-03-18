<?php

use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Course::create([
            'name' => 'Laravel',
            'note' => 'Seminggu Jago Laravel'
        ]);

        App\Course::create([
        'name' => 'Node Js',
        'note' => 'Berhasil dengan Node Js'
        ]);
    }
}
