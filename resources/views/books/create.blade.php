@extends('layout')
@section('title')
Create Book
@endsection
@section('content')
@include('inc.errors')
<form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-1">
      <input type="text" class="form-control" placeholder="Book Title" name="title" value="{{ old('title') }}">
    </div>
    <div class="form-group mb-1">
      <textarea class="form-control" rows="3" placeholder="Book Description" name="desc">{{ old('desc') }}</textarea>
    </div>
    <div class="form-group mb-1">
      <input type="file" class="form-control-file" name="img">
    </div>
    <button type="submit" class="btn btn-primary">Add The Book to The Library</button>
</form>
@endsection