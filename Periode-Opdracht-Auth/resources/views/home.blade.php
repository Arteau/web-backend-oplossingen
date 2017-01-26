@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (Auth::guest())
                        <h4>Welcome! You are not logged in.</h4>
                    @else
                        <h4>Welcome {{ Auth::user()->name }}</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
