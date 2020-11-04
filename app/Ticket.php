<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $guarded = ['id'];

    public function replies()
    {
        return $this->hasMany('App\Reply');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
