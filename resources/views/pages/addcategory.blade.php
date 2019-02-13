@extends('layouts.app')


@section('content')
    <div class="container"> 
    
        <div class="card bg-info text-white">
            <div class="card-body">Add New Category
                <button class="btn btn-primary float-right" onclick="window.history.back()">  Back  </button>
            </div>   
        </div>
            
        <div class="card">
        <hr>
            <div class="container">
                
                    <form action="/category" method="post">
                            {{csrf_field()}}
                           
                        <div class="row">
                            <div class="col-4"> </div>
                        
                            <div class="col-4">
                                <input type="text" name="name" value="{{old('name')}}" placeholder="Category name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" >
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
                                <button type="submit" class="btn btn-info"> Save</button>
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