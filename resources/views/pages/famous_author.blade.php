@extends('layouts.app')

@section('content')
<a class="btn btn-primary btn-lg" href="">Add Rating</a>
<div class="table-container">
    <table class="table table-bordered" id="book-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Author Name</th>
                <th>Voter</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datasFamous as $item)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $item->author->name}}</td>
                    <td>{{ $item->voters}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $datasFamous->links() }}

@endsection
