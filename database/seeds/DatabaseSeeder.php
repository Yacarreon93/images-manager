<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use ImagesManager\User;
use ImagesManager\Album;
use ImagesManager\Photo;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Model::unguard();

		// Doesn't check foreign keys to allow truncation
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');

		Photo::truncate();
		Album::truncate();
		User::truncate();

		$this->call('UsersTableSeeder');
		$this->call('AlbumsTableSeeder');
		$this->call('PhotosTableSeeder');
	}

}
