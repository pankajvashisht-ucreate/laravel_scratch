@extends('layouts.app')

@section('content')

<div class="container"> 
    
        <div class="card bg-primary text-white">
            <div class="card-body">Edit Category ({{$category->name}})
                <button class="btn btn-primary float-right" onclick="window.history.back()">  Back  </button>
            </div>   
        </div>
            
        <div class="card">
        <hr>
            <div class="container">
                
                    <form action="/category/{{$category->id}}" method="post">
                         {{csrf_field()}}
                           @method('patch')
                        <div class="row">
                            <div class="col-4"> </div>
                        
                            <div class="col-4">
                                <input type="text" name="name" value="{{$category->name}}" require placeholder="Category name" class="form-control {{ $errors->has('name')? ' is-invalid' : '' }}" >
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif   
                            </div>
                        </div>
                         <hr>   
                        <div class="row">
                            <div class="col-4"> </div>
                          
                            <div class="col-4"> 
                                <center>
                                <button type="submit" class="btn btn-info text-white"> Udpate</button>
                                <button type="Reset" class="btn btn-danger">Reset</button>
                                </center>
                            </div>
                            <div class="col-4"> </div>
                        </div>
                        <br>
                    </form>
                
            </div>
        
        </div>
    
    
    </div>

@endsection