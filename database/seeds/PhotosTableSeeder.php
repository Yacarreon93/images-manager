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
		foreach ($albums as $album) 
		{
			$qty = rand(0, 5);
			for ($i = 0; $i < $qty; $i++) 
			{ 
				Photo::create(
				[
					'name' => 'photo'.$i,
					'description' => 'description'.$i,
					'path' => '/img/test.png',
					'album_id' => $album->id
				]);	
			}
		}
	}

}
