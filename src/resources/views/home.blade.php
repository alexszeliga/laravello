@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col w-100">
            <div class="card">
                <div class="card-header">Dashboard</div>
                    <ul>
                        @foreach($todoLists as $todoList)
                            <!-- <li>
                                <div>{{ $todoList->title }}</div>
                                <form id='delete-todolist-{{ $todoList->id }}' action='/todolists/{{ $todoList->id }}' method='post'>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" form='delete-todolist-{{ $todoList->id }}' value="Delete">Delete</button>
                                </form>
                            </li> -->
                            <todolist :todo-list="{{$todoList}}"></todolist>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <a href="/todolists">+ Fuct Shits</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <pre>{{  $user  }}</pre>
            </div>
        </div>
    </div>
</div>
@endsection
