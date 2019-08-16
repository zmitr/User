<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'category_id', 'body',
    ];
    public function catalogs(){
        return $this->belongsTo('App\Category','category_id');

    }
}
