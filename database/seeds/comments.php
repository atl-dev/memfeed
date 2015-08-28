<?php

use Illuminate\Database\Seeder;

class comments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
    	$faker = Faker\Factory::create();
        for($i=1;$i<2000;$i++) {
        	$comment = App\Comment::create([
        		"email" => $faker->email,
        		"body" =>  $faker->sentence,
        		"mem_id" => $i,
        		"user_id" => 1,
        		"approved" => 'yes',
        	]);
        }
    }
}
