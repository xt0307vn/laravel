@extends('layout')
@section('title', 'Login form')
@section('content')
    <form action="{{ route('upload.handle') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <input type="submit" value="Submit">
    </form>
@endsection
