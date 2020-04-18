<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable=['question','option1','option2','option3','option4','correctanswer'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
