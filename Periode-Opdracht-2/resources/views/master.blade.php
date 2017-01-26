<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{-- <title>{{ $title }}</title> --}}
    {!! HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}
    {!! HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') !!}
    {!! HTML::script('https://code.jquery.com/jquery-3.1.1.min.js') !!}
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>