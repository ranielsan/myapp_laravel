<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
class CommentsController extends Controller
{
	public function store(Post $post)
	{
		$post->addComment(request('body'));
     	
		//Comment::create([
     	//'body' => request('body'),
     	//'post_id' => $this->id,
     	//'user_id' => $this->id
     	//]);
     	return back();
 	}


 }
