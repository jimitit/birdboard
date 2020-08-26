@extends('layouts.app')
    @section('content')
    <h1>Create a Project</h1>
    <form action="/projects" method="POST">
        @csrf
        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" />
            </div>
        </div>
        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea type="text" name="description" class="textarea" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" name="submit" class="button is-link">Create Project</button>
                <a href="/projects">Cancel</a>
            </div>
        </div>
    </form>
@endsection