@extends('layout.app')

@section('title', $book->title.' - Book')

@section('content')
    <h1>{{ $book->title }}</h1>
    <hr>
    <div class="notes">
        <h5>Written by: [{{ $book->author }}]</h5>
        <p>- Page: {{ $book->page }} <br>- Year : {{ $book->year }}</p>
        <hr>
        @if ($book->created_at)
            <p>This book was added {{ $book->created_at->diffForHumans() }}</p>
        @endif
    </div>
@endsection