@extends('layout')
@section('title', 'List laptop')
@section('content')
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <h1>List laptop</h1>
            <a href={{ route('laptop.create') }}>Add Laptop</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Code</th>
                    <th scope="col">Image</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laptops as $laptop)
                    <tr>
                        <td>{{ $laptop->name }}</td>
                        <td>{{ $laptop->code }}</td>
                        <td>{{ $laptop->image }}</td>
                        <td><a href={{ route("laptop.delete", ["id" => $laptop->id]) }}>Delete</a></td>
                        <td><a href={{ route("laptop.update", ["id" => $laptop->id]) }}>Update</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
