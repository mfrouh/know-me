<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    public function author()
    {
        return $this->belongsTo('App\User', 'author_id');
    }
    public function friend()
    {
        return $this->belongsTo('App\User', 'friend_id');
    }
}
