@extends('layout.app')

@section('title', 'Le Books - Add')

@section("content")
    <section id="pagestore">
        <h1>Insert Your Data</h1>
        <hr>
        <form action="{{ route('book.store') }}" method="POST">
            @csrf
            <div class="form-input">
                <label for="title">Book Title</label>
                <input class="input" type="text" name="title" minlength="5" maxlength="20">
            </div>
            <div class="form-input">
                <label for="author">Book Author</label>
                <input class="input" type="text" name="author" minlength="5" maxlength="20">
            </div>
            <div>
                <label for="page">Total Page</label>
                <input class="input" type="number" name="page" min="1">
            </div>
            <div class="form-input">
                <label for="year">Book Year</label>
                <select class="input" name="year">
                    <option selected disabled>Select year</option>
                    <option>2021</option>
                    <option>2020</option>
                    <option>2019</option>
                    <option>2018</option>
                    <option>2017</option>
                    <option>2016</option>
                    <option>2015</option>
                    <option>2014</option>
                    <option>2013</option>
                    <option>2012</option>
                    <option>2011</option>
                    <option>2010</option>
                    <option>2009</option>
                    <option>2008</option>
                    <option>2007</option>
                    <option>2006</option>
                    <option>2005</option>
                    <option>2004</option>
                    <option>2003</option>
                    <option>2002</option>
                    <option>2001</option>
                    <option>2000</option>
                </select>
            </div>
            <button class="btncr" type="submit">Submit</button>
        </form>
    </section>
@endsection