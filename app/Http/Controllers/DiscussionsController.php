<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscussionsController extends Controller
{
    public function create()
    {
        return view('discuss');
    }

    public function store()
    {
        dd(request());
    }
}
