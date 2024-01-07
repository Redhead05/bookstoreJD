@extends('layouts.app')

@section('content')
    <form>
        <div class="form-group">
            <label for="author_name">Book Author : </label>
            <select class="form-control" id="author_name" name="author_name">
                @foreach ($bookAuthor as $data)
                    <option value="{{ $data->id }}">{{ $data->author_name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="book_name">Book Name : </label>
            <select class="form-control" id="book_name" name="book_name">
                @foreach ($bookAuthor as $data)
                    <option value="{{ $data->book_name }}">{{ $data->book_name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="voters">Rating : </label>
            <select class="form-control" id="voters" name="voters"
            @foreach ($bookAuthor as $data)
                    <option value="{{ $data->voters }}">{{ $data->voters }}</option>
                @endforeach
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
    
