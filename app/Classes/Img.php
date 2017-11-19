<?php

namespace App\Classes;

use League\Glide\Responses\LaravelResponseFactory;
use Illuminate\Contracts\Filesystem\Filesystem;
use League\Glide\ServerFactory;
class Img
{




	/**
	param                                                                           $path
				* @param                                                                           $dir
				* @return mixed
				*/
				public function glide($path, $dir)
				{
		$filesystem = app(Filesystem::class);
		$server = ServerFactory::create([
								'response' => new LaravelResponseFactory(app('request')),
								'source' => $filesystem->getDriver(),
								'cache' => $filesystem->getDriver(),
								'source_path_prefix' => '/' . $dir,
								'cache_path_prefix' => '/.cache',
								'base_url' => '/glide/'
								]);
		return $server->getImageResponse($path, request()->all());
	}




	/**
	param $photo
				*/
				public function glidePublic($dir, $photo)
				{
		$server = ServerFactory::create([
								'source' => "./$dir/",
								'cache' =>  "$dir/",
								'source_path_prefix' => '/'. $dir,
								'cache_path_prefix' => '/.cache',
								]);
		return $server->outputImage($photo, request()->all());
	}


}
