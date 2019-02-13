@extends('layouts.app')


@section('content')
<div class="container">
<div class="card bg-info text-white">
    <div class="card-body">Add New Book</div>
  </div>
<div>
<div class="card">
    <div class="container">
        <form action="/books" method="post">
        @csrf

        <div class="form-group">
            <label for="email">Select Category</label>
            <select name="category_id" class="form-control {{ $errors->has('category_id')? ' is-invalid' : '' }}">
                <option value="">--Please Select Category--</option>
                @foreach($categories  as $category)
                    <option selected="{{(old('category_id')===$category->id)?'true':'false'}}" value="{{$category->id}}">
                        {{$category->name}}
                    </option>
                @endforeach
            </select>
            @if($errors->has('category_id'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('category_id') }}</strong>
                </span>
            @endif 
        </div>
        <div class="form-group">
            <label for="book">Book Name:</label>
            <input type="text" name="book_name" value="{{old('book_name')}}" Placeholder="Book Name" class="form-control {{ $errors->has('book_name')? ' is-invalid' : '' }}">
            @if ($errors->has('book_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('book_name') }}</strong>
                </span>
            @endif     
        </div>
        <div class="form-group">
            <label for="book">Author Name:</label>
            <input type="text" name="author_name" value="{{old('author_name')}}" Placeholder="Book Name" class="form-control {{ $errors->has('author_name')? ' is-invalid' : '' }}">
            @if ($errors->has('author_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('author_name') }}</strong>
                </span>
            @endif 
        </div>
        <div class="form-group">
            <label for="book">Description:</label>
            <textarea name="description" row="5" Placeholder="Description" class="form-control {{ $errors->has('description')? ' is-invalid' : '' }}">{{old('description')}}</textarea>
            @if ($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif 
        </div>
        <hr>
        <center>
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        <center>
        <hr>
        </form>
    <div>
</div>
</div>
@endsection

