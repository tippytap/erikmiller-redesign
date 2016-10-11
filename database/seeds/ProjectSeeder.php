<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = 'boop' . str_random(2);
        DB::table('projects')->insert([
            'title' => $title,
            'description' => str_random(200),
            'link' => $title,
            'background' => '/img/bg/kitten.png'
        ]);
    }
}
