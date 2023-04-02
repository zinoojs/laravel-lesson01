<!-- resources/views/todos/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Todos</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Completed</th>
                    {{-- <th>Action</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($todos as $todo)
                    {{-- <p>hello</p> --}}
                    <tr>
                        <td>{{ $todo->title }}</td>
                        <td>{{ $todo->completed ? 'Yes' : 'No' }}</td>
                        <td>
                            {{-- <a href="{{ route('todos.show', $todo->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-secondary">Edit</a>
                            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this todo?')">Delete</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{-- {{ $todos->links() }} --}}

        {{-- <a href="{{ route('todos.create') }}" class="btn btn-success">Create Todo</a> --}}
    </div>
@endsection
