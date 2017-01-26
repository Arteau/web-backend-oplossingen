@extends('master')

@section('titel')
    <titel>user index</titel>
@stop
    <body>
    @section('content')
    
        <h1>All Users</h1>
            <div>
                {{ $users }}
            </div>
    
    
    @stop
    </body>
</html>