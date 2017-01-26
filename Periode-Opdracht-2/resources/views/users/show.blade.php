@extends('master')

@section('titel')
    <titel>user index</titel>
@stop
    <body>
    @section('content')
    
        <h1>{{ $user->name }}</h1>
         
    
    @stop
    </body>
</html>