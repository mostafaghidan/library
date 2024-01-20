@extends('layout')
@section('title')
Library
@endsection
@section('content')
<h1>
    Books
</h1>
<div class="row">
    @foreach ($books as $book)
        <div class="col-md-4 mb-4">
                <div class="card d-flex flex-column h-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <a href="{{ route('books.show', $book->id) }}">
                                <h3>{{ $book->title }}</h3>
                                <p>{{ $book->desc }}</p>
                            </a>
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('uploads/books/'.$book->img) }}" alt="{{ $book->name }}" class="img-fluid mb-1">
                        </div>
                    </div>
                    <div class="mb-0">
                        <div class="justify-content-between">
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit The Book</a>
                            <a href="{{ route('books.delete', $book->id) }}" class="btn btn-danger">Delete The Book</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="form-group mb-3">
    <a class="btn btn-primary" href="{{ route('books.create') }}">Create A Book</a>
</div>
<div class="d-flex justify-content-center">
    {{ $books->links('pagination::bootstrap-4') }}
</div>
@endsection