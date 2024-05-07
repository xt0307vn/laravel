@extends('layout')
@section('title', 'House')
@section('content')
    <div class="container">
        <h1>This is house</h1>
        @if ($members)
            <ul>
                @foreach ($members as $member)
                <li>{{ $member->name }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
