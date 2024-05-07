@extends('layout')
@section('title', 'Update Laptop')
@section('content')
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <h1>Create laptop</h1>
            <a href={{ route("laptop") }}>List laptop</a>
        </div>
        <form action={{ route('laptop.update.post', ["id" => $id]) }} method="POST">
            @csrf
            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Name" name="name" value={{$name}}>
            </div>
            <div class="form-group mt-3">
                <label for="exampleInputPassword1">Code</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Code" name="code" value={{$code}}>
            </div>
            <div class="form-group mt-3">
                <label for="exampleInputPassword1">Image</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Image Url" name="image" value={{$image}}>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
@endsection
