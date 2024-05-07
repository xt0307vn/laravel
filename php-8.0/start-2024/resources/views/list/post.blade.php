@extends('layout')
@section('title', 'Detail post')
@section('content')
    <div class="container">
        <div class="row">
            <a href="{{ route('post') }}">Back</a>
        </div>
        <div class="row">
            @if ($post)
                @if ($update_post)
                    <p>Update post</p>
                @endif
                <h1>{{ $post->title }}</h1>
                <div>
                    <img src="{{ $post->image }}" alt="{{ $post->title }}">
                </div>
                <p>{{ $post->description }}</p>
            @endif
        </div>
    </div>
@endsection
