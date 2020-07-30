<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{
    // there are 7 resstful controller actions namely:-

    function show(Article $article)
    {
        // show a single resource
        //$article=Article::findOrFail($id);
        return view('articles.show',['article'=>$article]);
    }
    function index()
    {
        //render a list of resource.
        if(\request('tag'))
            $article=Tag::where('name',\request('tag'))->firstOrFail()->article;
        else
            $article=Article::latest('updated_at')->get();
        return view('articles.index',['articles'=>$article]);
    }
    function create()
    {
        //shows a view to create a new resource
        $t=Tag::all();
        return view('articles.create',['tags'=>$t]);
    }
    function store()
    {
        // persists the new resource
        $this->validateArticle();
        //$validatedAttributes=$this->validateArticle();
        //$article=new Article($validatedAttributes);
        $article=new Article(\request(['title','excerpt','body']));
        $article->user_id=1;
        $article->save();
        if(\request()->has('tags'))
            $article->tags()->attach(\request('tags'));

        /*
        $article->Title=\request('title');
        $article->excerpt=\request('excerpt');
        $article->body=\request('body');
        $article->save();
        */

       /* Article::create([
            'Title'=>\request('title'),
            'excerpt'=>\request('excerpt'),
            'body' =>\request('body')
        ]);*/

        //Article::create($validatedAttributes);
       // return redirect('/articles');
        return redirect(route('articles.index'));
    }
    function edit(Article $article)
    {
        //show a view to edit a resource
        //$article=Article::findOrFail($id);
        return view('articles.edit',['article'=>$article]);

    }
    function update(Article $article)
    {
        // persist the edited resource
        $validatedAttributes=\request()->validate([
            'title'=>'required',
            'excerpt'=>['required','max:150'],
            'body'=>'required'
        ]);
        /*
         $article=Article::findOrFail($id);
        $article->Title=\request('title');
        $article->excerpt=\request('excerpt');
        $article->body=\request('body');
        $article->save();
        */
        $article->update($validatedAttributes);
        //return redirect('/articles');
        return redirect(route('articles.index'));
    }
    function destroy()
    {
        //delete the resource
    }

    function validateArticle()
    {
        return \request()->validate([
            'title'=>'required',
            'excerpt'=>['required','max:150'],
            'body'=>'required',
            'tags'=>'exists:tags,id' // exists on the tags table specifically on the id column
        ]);
    }
}
