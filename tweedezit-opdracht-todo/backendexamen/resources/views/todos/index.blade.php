@extends('layouts.app')

@section('content')

<h3>Create Post</h3>
    {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('body', 'New Todo')}}
            {{Form::text('body', '', ['class' => 'form-control', 'placeholder' => 'Todo Text'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}

@if(count($todos) > 0)
   
    <hr> 
    <h2>Not Completed</h2>

    <?php $aTodoNotCompleted=true; ?>
    @foreach($todos as $todo)
        @if(!$todo['completed'])
            
            <p><a href="/todo/toggle/{{$todo->id}}" title="Done!">
                <span class="glyphicon glyphicon-ok" style="color:green" aria-hidden="true"></span>
            </a> | <a href="todo/delete/{{$todo->id}}" title="Remove">
                <span class="glyphicon glyphicon-remove" style="color:red" aria-hidden="true"></span>
            </a> | <strong>{{$todo['body']}}</strong> | <small>{{$todo->updated_at}}</small></p>
            <?php $aTodoNotCompleted=false; ?>
        @endif
    @endforeach 
    @if($aTodoNotCompleted)
    everything's done! Congrats...
    @endif
    <hr>
    <h2>Completed</h2>
    
    <?php $noTodosCompleted=true; ?>
    @foreach($todos as $todo)
        @if($todo['completed'])
            <p><a href="/todo/toggle/{{$todo->id}}" title="Whoops, not done yet">
                <span class="glyphicon glyphicon-arrow-left" style="color:blue" aria-hidden="true"></span>
            </a> | <a href="todo/delete/{{$todo->id}}" title="Remove">
                <span class="glyphicon glyphicon-remove" style="color:red" aria-hidden="true"></span>
            </a> | <strong>{{$todo['body']}}</strong> | <small>{{$todo->updated_at}}</small></p>
            <?php $noTodosCompleted=false; ?>
        @else
        @endif    
    @endforeach
    @if($noTodosCompleted)
         no completed todos
    @endif 
    <hr>
@else
    <hr>
    <h2>You don't have anything to do yet.</h2>
@endif


@endsection
