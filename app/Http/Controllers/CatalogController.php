<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CatalogController extends Controller
{
    public function getIndex($id=null){
        $cat = category::find($id);
        return view('catalog',compact('cat'));
    }
}
