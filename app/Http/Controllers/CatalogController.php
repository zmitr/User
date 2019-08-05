<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
class CatalogController extends Controller
{
    public function getIndex($id=null){
        $cat = Category::find($id);
        $posts = Post::where('category_id',$id)->orderBy('id','DESC')->paginate(15);
        return view('catalog',compact('cat','posts'));
    }
}
