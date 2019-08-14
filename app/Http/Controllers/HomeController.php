<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\postRequest;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getPosts()
    {
        $posts = Post::where('author_id',Auth::user()->id)->orderBy('id','DESC')->paginate(15);
        return view('/home',compact('posts'));
    }

    public function getAdd() {

    }

    public function getEdit($id = null){
        $obj = Post::find($id);
        return view('post_edit',compact('obj'));
    }

    public function postAdd() {

    }

    public function postEdit(postRequest $r, $id = null) {
        $obj = Post::find($id);
        $obj->title = $r['title'];
        $obj->body = $r['body'];
        $obj->category_id = $r['category_id'];

        $obj->save();
        return redirect()->back();
    }
}
