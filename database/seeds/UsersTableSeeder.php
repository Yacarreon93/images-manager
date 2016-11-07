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
		$counter = 0;
		for ($i = 0; $i < 10; $i++) 
		{
			$counter++;
			User::create(
			[
				'name' 	=> 'user_'.$counter,
				'email'	=> 'email_'.$counter,
				'question' => 'question_'.$counter,
				'answer' => 'answer_'.$counter,
				'password' => bcrypt('password_'.$counter)			
			]);
		}

	}

}
