<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\post;

class pagescontroller extends Controller
{
	

  public function home()
  {
  	$posts=Post::orderBy('created_at','desc')->get();
  	return view('pages.home',compact('posts'));
  }
}
