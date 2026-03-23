@extends('layouts.master')

@section('title', 'Create New Type')

@section('content')

    <form action="{{ route('types.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

@endsection