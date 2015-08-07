<?php

use Illuminate\Database\Seeder;

class mems extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<200;$i++) {
        	$mem = App\Mem::create([
        			'title' => $faker->userName,
        			'img_path' => 'http://placehold.it/600x400',
        		]);
        }
    }
}
