@extends('layouts.app')

@section('content')
    
    <div class="row">
        <div class="col-4">
            @include('pages.category')
        </div>
        <div class="col-4">
            <div class="float-right"><a href="add_book" class="btn btn-info" role="button">Add Book</a></div>
        </div>
    </div>
</div>
      
        <hr>

        <div class="container" >
        
        @foreach($books as $book)
            
                <div class="card  text-white">
                    <div class="card-header bg-primary"><a href="books/{{$book->id}}" class="text-white"> {{$book->book_name}}  </a>
                        
                        <span class="float-right">      @include('utils.delete',array( 'url' => '/books/'.$book->id,'message' => 'Are Sure Want '.$book->book_name.' delete this Book?'))</span>
                        &nbsp;&nbsp;   
                    </div>
                    <div class="card-body bg-info">{{$book->description}}</div>
                    <div class="card-footer bg-primary">{{$book->author_name}}</div>
                </div>
                <hr>
        @endforeach    
                      
    
@endsection 