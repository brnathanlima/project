@extends('layout')

@section('title', 'Edit project')

@section('content')
    <h1 class="title">Edit Project</h1>

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('PATCH')
        @csrf
        <div class="field">
            <label for="title" class="label">Title</label>
            <div class="control">
                <input type="text" class="text" name="title" placeholder="Title" value="{{ $project->title }}">
            </div>
        </div>
        <div class="field">
            <label for="description" class="label">description</label>
            <div class="control">
                <textarea name="description" id="description" cols="30" rows="10" class="textarea">{{ $project->description }}</textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>
        </div>
    </form>
    <form action="/projects/{{ $project->id }}" method="post">
        <div class="field">
            <div class="control">
                @method('DELETE')
                @csrf
                <button class="button">Delete Project</button>
            </div>
        </div>
    </form>
@endsection
