@extends('layouts.master')

@section('title', 'Project Types')

@section('content')
    <a href="{{ route('types.create') }}" class="btn btn-primary mb-3">Create New Type</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($types as $type)
                <tr>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->description }}</td>
                    <td><a href="{{ route('types.show', $type) }}">View</a></td>
                    <td><a href="{{ route('types.edit', $type) }}" class="btn btn-sm btn-outline-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('types.destroy', $type) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this type?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
