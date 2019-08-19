<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'author_id','category_id','title','excerpt','slug','body'
    ];

    protected $guarded = ['id'];

    public function catalogs(){
        return $this->belongsTo('App\Category','category_id');

    }
}
