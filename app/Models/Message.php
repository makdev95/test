<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];

    public function meeting(){
        return $this->belongsTo('App\Models\Meeting');
    }
}
