@extends('layouts.app')

@section('content')
        <div class="panel panel-default">
            <div class="panel-heading">
                <img src="{{ $d->user->avatar }}" alt="" width="40px" height="40px">&nbsp;&nbsp;&nbsp;
                <span>{{ $d->user->name }}, <b>{{ $d->created_at->diffForHumans() }}</b></span>
                <a href="{{ route('discussion', ['slug' => $d->slug ]) }}" class="btn btn-default pull-right">view</a>
            </div>

            <div class="panel-body">
                <h4 class="text-center">
                    <b>{{ $d->title }}</b>
                </h4>
                <hr>
                <p class="text-center">
                    {{ $d->content }}
                </p>
            </div>
            <div class="panel-footer">
                <p>
                    {{ $d->replies->count() }} Replies
                </p>
            </div>
        </div>

        @foreach($d->replies as $r)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <img src="{{ $r->user->avatar }}" alt="" width="40px" height="40px">&nbsp;&nbsp;&nbsp;
                    <span>{{ $r->user->name }}, <b>{{ $r->created_at->diffForHumans() }}</b></span>
                </div>

                <div class="panel-body">
                    <p class="text-center">
                        {{ $r->content }}
                    </p>
                </div>
                <div class="panel-footer">
                    @if($r->is_liked_by_auth_user())
                        <a href="{{ route('reply.unlike', ['id' => $r->id ]) }}" class="btn btn-danger btn-xs">Unlike <span class="badge">{{ $r->likes->count() }}</span></a>
                    @else
                        <a href="{{ route('reply.like', ['id' => $r->id ]) }}" class="btn btn-success btn-xs">Like <span class="badge">{{ $r->likes->count() }}</span></a>
                    @endif
                </div>
            </div>
        @endforeach

        <div class="panel panel-default">
            <div class="panel-body">
                @if(Auth::check())
                    <form action="{{ route('discussion.reply', ['id' => $d->id ]) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="reply">Leave a reply...</label>
                            <textarea name="reply" id="reply" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn pull-right">Leave a reply</button>
                        </div>
                    </form>
                @else

                    <div class="text-center">
                        <h2>Sign in to leave a reply</h2>
                    </div>
                @endif
            </div>
        </div>
@endsection
