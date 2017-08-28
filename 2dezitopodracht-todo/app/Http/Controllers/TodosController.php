<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Todo;

class TodosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index(){
    // $todos = [array('body'=>'todo one !!','completed'=>false), array('body'=>'todo two !!','completed'=>false)];
    //    return view('pages/todoIndex')->with('todos', $todos);
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        if($user == null)
        {
            return view('todos.index')->with('todos', []);

        }
        return view('todos.index')->with('todos', $user->todos);

    }

    public function toggle($id){
        
       
        $t=Todo::find($id);
        $t->completed=!$t->completed;
        $t->save();
        return redirect('/todo');//$this->index(); 

    }

    public function store(Request $request){
        
        $this->validate($request, [
            'body' => 'required',
        ]);

        $todo = new Todo;
        $todo->completed = false;
        $todo->body = $request->input('body');
        $todo->user_id = auth()->user()->id;
        $todo->save();

        return redirect('/todo');


    }

    public function delete($id){
        $todo=Todo::find($id);
        $s =$todo->body;
        $todo->delete();

        return redirect('/todo')->with('success', 'Successfuly deleted '.$s.'.');
    }
}
