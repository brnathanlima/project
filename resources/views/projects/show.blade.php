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
        <div>
            <ul>
                @foreach ($project->tasks as $task)
                    <li>
                        <form method="POST" action="/tasks/{{ $task->id }}">
                            @method('PATCH')
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
@endsection
