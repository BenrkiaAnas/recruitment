<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    public function annonce(){
        return $this->belongsTo('App\Annonce');
    }
}
