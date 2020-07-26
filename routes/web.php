<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('test',function (){
    $name=request('name');

    return view('test',['name'=>$name]);
});*/
/*Route::get('/post/{post}', function ($post){
    $posts=[
        'first-post'=>'Hello First Blog Post',
        'second-post'=>'Hello 2nd blog Post'
    ];

    if(!array_key_exists($post,$posts))
    {
        abort(404,'Sorry that post was not found');
    }
    return view('post',[
        'post'=>$posts[$post]
    ]);
});*/
Route::get('/post/{post}','PostsController@show');

