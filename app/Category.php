<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   public function annonces(){
       return $this->morphMany('App\Annonce','commentable');
   }
}
