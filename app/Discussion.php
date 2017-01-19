<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $fillable = ['title','content','user_id','channel_id','slug'];

    public function channel()
    {
        return $this->belongsTo('App\Channel');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function replies()
    {
        return $this->hasMany('App\Reply');
    }

    public function watchers()
    {
        return $this->hasMany('App\Watcher');
    }

    public function is_being_watched_by_auth_user()
    {
        $id = Auth::id();

        $watchers_ids = array();

        foreach($this->watchers as $w):
            array_push($watchers_ids, $w->user_id);
        endforeach;

        if(in_array($id, $watchers_ids))
        {
            return true;
        }
        else {
            return false;
        }
    }
}
