<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use ImagesManager\User;
use ImagesManager\Album;
use ImagesManager\Photo;

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		for ($i = 0; $i < 10; $i++) 
		{
			User::create(
			[
				'name' 	=> 'user'.$i,
				'email'	=> 'email'.$i,
				'question' => 'question'.$i,
				'answer' => 'answer'.$i,
				'password' => bcrypt('password'.$i)			
			]);
		}

	}

}
