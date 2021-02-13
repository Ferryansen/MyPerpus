@extends('layout.app')

@section('title', 'Le Books')

@section('content')
    <section id="main">
        <h1>Books table</h1>
        <hr>
        <a id="butt" class="btn btn-outline-success" href="{{ route('book.create') }}">Add a book</a>
        <table border="1" id="tab">
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Author</th>
                <th>Page</th>
                <th>Year</th>
                <th>Action</th>
            </tr>

            @foreach ($books as $book)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><a href="{{ route('book.show', $book->id) }}">{{ $book->title }}</a></td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->page }}</td>
                <td>{{ $book->year }}</td>
                <td class="act">
                    <a class="btn btn-outline-warning" href="{{ route('book.edit', $book->id) }}">Edit</a>
                    <form action="{{ route('book.delete', $book->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </section>
@endsection