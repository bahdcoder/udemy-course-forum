<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $fillable = ['title','slug'];

    public function discussions()
    {
        return $this->hasMany('App\Discussion');
    }
}
