<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    //
    public function owner()
    {
        return $this->belongsTo('App\User');
        // return $this->belongsTo()
    }
}
