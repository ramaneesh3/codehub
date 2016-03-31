<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\CreatePostRequest;
use Illuminate\Support\Facades\Auth;


class ForumController extends Controller
{
	
	

    public function getPost()
    {
    	$categories=Category::all();
    	return view('pages.question',compact('categories'));
    }

    public function postQuestion(CreatePostRequest $request){
    	$posts=new Post();

        //$posts->user_id=Auth::user()->id;
    	$posts->category_id=$request['category'];
    	$posts->title=$request['title'];
    	$posts->body=$request['body'];
    	$posts->save();
        $posts=Post::orderBy('created_at','desc')->get();
         return view('users.test',compact('posts'));
       
    }
}
