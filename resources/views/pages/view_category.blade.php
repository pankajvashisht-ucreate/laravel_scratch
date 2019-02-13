@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card text-white bg-info">
            <div class="card-body text-center">{{$category->name}}</div>
</div>
<hr>
<center>
    <a href="/category/{{$category->id}}/edit" class="btn btn-primary btn-lg text-white text-center" >Edit</a>
</center>
</div>

@endsection