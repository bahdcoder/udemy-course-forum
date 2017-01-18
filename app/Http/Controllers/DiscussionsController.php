<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Discussion;
use Illuminate\Http\Request;

class DiscussionsController extends Controller
{
    public function create()
    {
        return view('discuss');
    }

    public function store()
    {
        $r = request();
        $this->validate($r, [
            'channel_id' => 'required',
            'content' => 'required',
            'title' => 'required'
        ]);

        $discussion =Discussion::create([
            'title' => $r->title,
            'content' => $r->content,
            'channel_id' => $r->channel_id,
            'user_id' => Auth::id(),
            'slug' => str_slug($r->title)
        ]); 

        Session::flash('success', 'Discussion succesfully created.');

        return redirect()->route('discussion', ['slug' => $discussion->slug ]);
    }

    public function show($slug)
    {
        return view('discussions.show')->with('discussion', Discussion::where('slug', $slug)->first());
    }
}
