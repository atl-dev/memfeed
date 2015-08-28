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
        $user = App\User::create([
                "name" => $faker->userName,
                "email" => $faker->email,
                "password" => $faker->word,

            ]);
        for($i=0;$i<2000;$i++) {
        	$mem = App\Mem::create([
        			'title' => $faker->userName,
        			'img_path' => 'http://placehold.it/600x400',
        			'approved' => 'yes',
					'plus' => '0',
					'minus' => '0',
          'user_id' => 1,
					'created_at' => date("Y-m-d H:i:s"),
					'updated_at' => date('Y-m-d H:i:s'),
				]);
        }
    }
}
