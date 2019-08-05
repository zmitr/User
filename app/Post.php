<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function catalogs(){
        return $this->belongsTo('App\Category','category_id');

    }
}
