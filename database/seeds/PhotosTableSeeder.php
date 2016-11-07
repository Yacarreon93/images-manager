<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use ImagesManager\User;
use ImagesManager\Album;
use ImagesManager\Photo;

class PhotosTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$albums = Album::all();
		$counter = 0;
		foreach ($albums as $album) 
		{
			$qty = mt_rand(0, 5);
			for ($i = 0; $i < $qty; $i++) 
			{ 
				$counter++;
				Photo::create(
				[
					'name' => 'photo_'.$counter,
					'description' => 'description_'.$counter,
					'path' => '/img/test.png',
					'album_id' => $album->id
				]);	
			}
		}
	}

}
