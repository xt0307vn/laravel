@extends('layout')
@section('title', 'List post')
@section('content')
    <div class="container">
        <div class="row">
            <h1>List post</h1>
            <ul>
                @foreach ($posts as $post)
                    <li class="d-flex">
                        <a href="post/{{ $post->id }}">{{ $post->title }}</a>
                        <p>{{ $post->user_id }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
