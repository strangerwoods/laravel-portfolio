@extends('layouts.master')

@section('title', 'Edit Type')

@section('content')

    <form action="{{ route('types.update', $type) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required value="{{ $type->name }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ $type->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

@endsection
@extends("layouts.master")

@endsection