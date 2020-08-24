@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
    <div class="col">
        <todolist-manager :todo-list="{{$todoList}}"></todolist-manager>
    </div>
    </div>
</div>
@endsection
