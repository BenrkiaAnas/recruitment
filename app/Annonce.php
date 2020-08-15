<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Annonce extends Model
{
  
    public function candidate(){
        return $this->hasOne('App\Candidate');
    }
    public function commentable()
    {
        return $this->morphTo();
    }
}
