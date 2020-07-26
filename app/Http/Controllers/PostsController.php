<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;
use App\Posts;
class PostsController extends Controller
{
    function show($slug){
        /*$posts=[
            'first-post'=>'Hello First Blog Post',
            'second-post'=>'Hello 2nd blog Post'
        ];*/
        //$post=DB::table('posts')->where('slug',$slug)->first();
        //$post=Posts::where('slug',$slug)->first();
        //$post=Posts::where('slug',$slug)->firstorFail();
        /*if($post==null)
            abort(404);*/
        /*if(!array_key_exists($post,$posts))
        {
            abort(404,'Sorry that post was not found');
        }*/
        return view('post',[
            //'post'=>$posts[$post]
            'post'=>Posts::where('slug',$slug)->firstorFail()
        ]);
    }
}
