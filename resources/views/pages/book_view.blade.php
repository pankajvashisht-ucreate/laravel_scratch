@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="card">
            <div class="card-header">{{$book->book_name}}
                    <span class="float-right">
                         <a herf="" class="btn btn-info btn-sm text-white">Edit</a>   
                    </span>

            </div>
            <div class="card-body">{{$book->description}}</div>
            <div class="card-footer">Author Name : {{$book->author_name}}</div>
        </div>
        <hr>
        <div class="card">
                <div class="card-header test-white">
                        Category Information         
                </div>
                <div class="card-body">
                        {{$category_details[0]['name']}}
                </div>

        </div>
    </div>

@endsection