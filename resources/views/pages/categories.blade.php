@extends('layouts.app')


@section('content')
    <div class="container">
            <div class="pull-right"><a href="/category/create" class="btn btn-info"> Add Category <a></div>
            <hr>
        @foreach($categories as $category)
        <div class="card text-black">
                <div class="card-body">
                    <span>
                  <a href="/category/{{$category->id}}">  {{$category->name}} </a>
                    <span>
                    <span class="float-right">@include('utils.delete',array( 'url' => '/category/'.$category->id,'message' => 'Are Sure Want '.$category->name.' delete this Category?'))</span>        
                </div>
               
        </div>
        <hr>
        @endforeach    
    
    
    </div>
@endsection