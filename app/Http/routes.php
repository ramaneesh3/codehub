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
//Use routes like this
Route::group(['middleware'=>'auth','prefix'=>'your desired name'],function(){
	//Every routes that should have authentication first
	Route::group(['prefix'=>'profile'],function(){
Route::get('/',['as'=>'get.profile',['uses'=>'COntroller@action']]);

//and so on
	});
});

Route::group([],function(){
//Every routes that should not have authentication
});

    Route::get('/', [
    	'as'=>'home',
    	'uses'=>'pagescontroller@home'


    	]);

    Route::group(['prefix'=>'auth'],function(){

    	Route::get('register',[

    		'as'=>'get_register',
    		'uses'=>'Auth\Authcontroller@getRegister'

    		]);
    	

    	Route::get('login',[

    		'as'=>'get_login',
    		'uses'=>'Auth\Authcontroller@getLogin'

    		]);
    	
    	Route::get('logout',[

    		'as'=>'get_logout',
    		'uses'=>'Auth\Authcontroller@getLogout'

    		]);
    	

    });
Route::post('login',['as'=>'post.login','uses'=>'Auth\Authcontroller@PostLogin']);
Route::post('register',['as'=>'post.register','uses'=>'Auth\AuthController@PostRegister']);


Route::group(['middleware'=>['web']], function(){
Route::get('/hom',['middleware'=>'auth','as'=>'hom','uses'=>'Userscontroller@getHom']);

});


    Route::group(['prefix'=>'question'],function(){

Route::get('post',[

    		'as'=>'get_post',
    		'uses'=>'ForumController@getPost'

    		]);
Route::post('post',[

    		'as'=>'post_question',
    		'uses'=>'ForumController@postQuestion'

    		]);
    	

});