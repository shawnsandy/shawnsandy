<?php




/*
------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	//d	d(jarvis_views("shawnsandy", "shawnsandy"));
	return view(jarvis_views("main", "shawnsandy"));
}
);


Route::group(['prefix' => config("jarvis.base_url")], function () {
	
	Jarvis::install_routes();
	Jarvis::routes();
	
}
);


