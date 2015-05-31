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
/*
Route::get('test',['as'=>'test.show',function()
{
	return 'TEST';
}]);

Route::get('test2',function()
{
	return 'test.show';
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


Route::get('test',['as'=>'test.show',function()
{
	return 'TEST';
}]);

Route::get('test2',function()
{
	return route('test.show');
});
*/
Route::get('/',['as'=>'posts.index',function()
{
	return  view('posts.index');
}]);

Route::get('show/{id}',['as'=>'posts.show',function($id)
{
	$data=[
		'id' => $id,
	];
	return  view('posts.show',$data);
}]);

Route::get('about',['as'=>'about.index',function()
{
	return view('about.index');
}]);

Route::get('contact',['as'=>'contact.index',function()
{
	return view('contact.index');
}]);


/*
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/