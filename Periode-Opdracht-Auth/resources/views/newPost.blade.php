@extends ('layouts.app');

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Post</div>

                <div class="panel-body">
                    @if (Auth::guest())
                        <h4>You need to login to create posts or vote.</h4>
                    @else
                        <h4>{{ Auth::user()->name }}</h4>
                        <hr>
                        <form method="POST">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" name="link" id="link" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Create Post
                                </button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
