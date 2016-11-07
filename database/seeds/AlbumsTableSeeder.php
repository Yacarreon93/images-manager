<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use ImagesManager\User;
use ImagesManager\Album;
use ImagesManager\Photo;

class AlbumsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$users = User::all();
		$counter = 0;
		foreach ($users as $user) 
		{
			$qty = mt_rand(0, 5);
			for ($i = 0; $i < $qty; $i++) 
			{ 
				$counter++;
				Album::create(
				[
					'name' => 'album_'.$counter,
					'description' => 'description_'.$counter,
					'user_id' => $user->id
				]);	
			}
		}
	}

}
