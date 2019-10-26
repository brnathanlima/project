@extends('layout')

@section('title', 'View Project')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>

    <div class="content">
        {{ $project->description }}
    </div>
    <p>
        <a href="/projects/{{ $project->id }}/edit">Edit</a>
    </p>
    @if ($project->tasks->count())
        <hr>
        <div class="box">
            <ul>
                @foreach ($project->tasks as $task)
                    <li>
                        <form method="POST" action="/completed-tasks/{{ $task->id }}">
                            @if ($task->completed)
                                @method('DELETE')
                            @endif
                            @csrf
                            <label for="task-{{ $task->id }}" class="checkbox {{ $task->completed ? 'is-complete': '' }}">
                                <input type="checkbox" name="completed" id="task-{{ $task->id }}" onChange="this.form.submit()" {{ $task->completed ? 'checked': '' }}>
                                {{ $task->description }}
                            </label>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/projects/{{ $project->id }}/tasks" class="box" method="POST">
        @csrf
        <div class="field">
            @include('errors')
            <label for="description" class="label">New Task</label>
            <div class="control">
                <input type="text" name="description" id="description" class="input {{ $errors->has('description') ? 'is-danger' : '' }}" placeholder="New Task" required>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Add Task</button>
            </div>
        </div>
    </form>
@endsection
