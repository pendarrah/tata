<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $guarded = ['id'];

    public function ticket()
    {
        return $this->hasMany('App\Ticket');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
