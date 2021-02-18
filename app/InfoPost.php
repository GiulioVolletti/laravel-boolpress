<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoPost extends Model
{
   // protected $table = 'infoPost';
   public $timestamp = false;

   // relationship on post
   public function post(){
       return $this->belongsTo('App\Post');
   }
}
