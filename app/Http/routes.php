<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('test',['as'=>'posts.show',function()
{
	return 'TEST';
}]);

Route::get('test2',function()
{
	return 'posts.show';
});

Route::pattern('id','[0-9]+');
Route::get('posts',function()
{
	return 'post:';
});

Route::get('posts/{id}',function($id)
{
	return 'post:'.$id;
});

Route::get('article',function()
{
	return 'article:';
});

Route::get('article/{id}',function($id)
{
	return 'article:'.$id;
});

Route::get('users/{naame?}',function($name=null)
{
	if($name)
	{
		$str = 'hi : '.$name;
	}
	else
	{
		$str  = 'who are u';
	}
	return $str;
});
/*
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/