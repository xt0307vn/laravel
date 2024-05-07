@extends('layout2')
@section('title', 'Test')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-1">
            <button type="submit">
                <a href={{ route('logout') }}>Logout</a>
            </button>
            <h2>{{ __('form.create.user') }}</h2>
        </div>
    </div>
    <div class="row">
        <h1>Hello World</h1>
    </div>
</div>
@endsection
@section('content2')
<div class="container">
    <h1>Đây là content 2</h1>
</div>
@endsection
