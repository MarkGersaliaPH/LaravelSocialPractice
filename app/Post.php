<?php

namespace App;
use DB;
use User; 
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function user(){
        return $this->belongsTo('App\User','posted_by');
    }

    public function comment() {
        return  $this->hasMany('App\Comment','post_id');
    }

    public function countComment(){
        return  $this->hasMany('App\Comment','post_id')->count();
    }

    public function image(){
        return $this->hasMany('App\PostImage');
    }

}
