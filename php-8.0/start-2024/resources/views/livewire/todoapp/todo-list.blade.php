<div>
    <h1>List</h1>
    <ul>
        @foreach ($todos as $todo)
        <li>{{ $todo->name }}</li>
        @endforeach
    </ul>
</div>
