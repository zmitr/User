<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function getPosts($category_id=null){
        if ($category_id == null) {
            $posts = Post::orderBy('id','DESC')->paginate(15);
        }
        else {
            $posts = Post::where('category_id',$category_id)->orderBy('id','DESC')->paginate(15);
        };

        return view('index',compact('posts'));
    }
}
