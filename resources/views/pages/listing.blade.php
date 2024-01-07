@extends('layouts.app')

@section('content')

        <div class="form-group">
            <label for="dropdown">List Show</label>
            <select class="form-control" id="dropdown">
                <option value="option1">10</option>
                <option value="option2">100</option>
            </select>
        </div>
        <div class="form-group">
            <label for="text-field">Search</label>
            <form method="GET" action="search">
                <input type="text" class="form-control" value="{{ isset($search) ? $search : ''}}" name="search" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
        </div>

        <div class="table-container">
            <table class="table table-bordered" id="book-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Book Name</th>
                        <th>Category Name</th>
                        <th>Author Name</th>
                        <th>Average Rating</th>
                        <th>Voter</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datas as $item)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $item->book_name }}</td>
                            <td>{{ $item->category->name}}</td>
                            <td>{{ $item->Author->name}}</td>
                            <td>{{ $item->average_rating}}</td>
                            <td>{{ $item->voters}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- {{ $filteredData->links() }} --}}
    </div>
@endsection
