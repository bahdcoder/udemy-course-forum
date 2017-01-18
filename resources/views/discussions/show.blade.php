@extends('layouts.app')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">{{ $discussion->title }}</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
@endsection
