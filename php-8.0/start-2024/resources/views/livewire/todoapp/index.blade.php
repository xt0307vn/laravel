<div>
    <h1>Todo App</h1>
    {{-- @livewire('todoapp.todo-list', ['todos' => $todos]) --}}
    {{-- <livewire:todoapp.todo-form :todos="$todos" /> --}}
    @livewire('todoapp.todo-form')
    {{-- @@livewire('component', ['user' => $user], key($user->id)) --}}
    {{ $name }}
</div>
