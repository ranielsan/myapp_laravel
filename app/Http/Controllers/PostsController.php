<?php

namespace App\Http\Controllers;
use App\Post;
use App\Mail\WelcomeAgain;
use Illuminate\Http\Request;
use Carbon\Carbon;
class PostsController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

      public function index()
    {
      $posts = Post::latest()
      ->filter(request(['month', 'year']))
      ->get();
      //Temporary
      $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
      ->groupBy('year', 'month')
      ->orderByRaw('min(created_at) desc')
      ->get()
      ->toArray(); 


    	return view('posts.index', compact('posts', 'archives'));
    }
     public function show($id)
    {
      $post = Post::find($id);
       $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
      ->groupBy('year', 'month')
      ->orderByRaw('min(created_at) desc')
      ->get()
      ->toArray(); 

    	return view('posts.show', compact('post', 'archives'));
    }
     public function create()
    {
    	return view('posts.create');
    }
  
   	public function store(Request $request)
   	{
      
      $this->validate(request(), [
          'title' => 'required',
          'body' => 'required'
      ]);

      auth()->user()->publish(
        new Post(request(['title', 'body']))
      );


      //Post::create(request(['title', 'body']));
      //dd(request(['title', 'body']));
   		//$post = new Post;    //To add new Data
      //$post->title = request('title'); //To add new Data
      //$post->body = request('body'); //To add new Data 
      //$post->save();      //To Save new Data
      return redirect('/');     //To go back in default page.


   	}

  public function edit($id)
    {
       $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request)
    {
      $post = Post::find($request->input('id'));
      $post->id = $request->input('id');
      $post->title = $request->input('title');
      $post->body = $request->input('body');
      
      $post->save();
           return redirect('/');
      
   
       //$post = $request->isMethod('put') ? Post::findOrFail($request->article_id) : new Post;
      //$post->id = $request->input('article_id');
      //$post->title = $request->input('title');
      //$post->body = $request->input('body');

      //if($post->save()){
       //    return redirect('/');
      //}
    }
    public function destroy($id)
    {
      $post = Post::find($id);
      $post->delete();
      return redirect('/');
    }
    
}
