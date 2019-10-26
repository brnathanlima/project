@extends('layout')

@section('title', 'Edit project')

@section('content')
    <h1 class="title">Edit Project</h1>

   @include('errors')

    <form method="POST" action="/projects">
        @csrf
        <div class="field">
            <label for="title" class="label">Title</label>
            <div class="control">
                <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" placeholder="Title" value="{{ old('title') }}" required>
            </div>
        </div>
        <div class="field">
            <label for="description" class="label">description</label>
            <div class="control">
                <textarea name="description" id="description" cols="30" rows="10" class="textarea {{ $errors->has('description') ? 'is-danger' : ''}}" required>{{ old('description') }}</textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>
    </form>
@endsection
