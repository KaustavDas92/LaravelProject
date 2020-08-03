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

/*app()->bind('example',function ()
{
    $foo=config('services.foo');
    return new \App\Example($foo);
});*/

Route::get('/', function () {
    return view('welcome1');
});

Route::get('/container','PagesController@home');

//Route::get('/container',function ()
//{
   /*$container=new App\Containers();
   $container->bind('example',function ()
   {
       return new App\Example();
   });
   $example=$container->getBindings('example');
   //ddd($example);
    $example->go();*/

    //$example=resolve('example');

  //  $example=resolve(App\Example::class);
   // ddd($example);
//});
Route::get('/contact', 'ContactController@show');
Route::post('/contact','ContactController@store');



Route::get('/articles','ArticleController@index')->name('articles.index');
Route::post('/articles','ArticleController@store');
Route::get('/articles/create','ArticleController@create');
Route::get('/articles/{article}', 'ArticleController@show')->name('articles.show');
Route::put('/articles/{article}', 'ArticleController@update');
Route::get('/articles/{article}/edit', 'ArticleController@edit');



Route::get('/about',function ()
{
    //$article=App\Article::take(1)->get();
    //$article=App\Article::paginate(1);
    $article=App\Article::take(2)->latest('updated_at')->get();
    return view('about',['articles'=>$article]);
});
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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
