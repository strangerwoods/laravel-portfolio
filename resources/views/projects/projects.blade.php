@extends('layouts.master')

@section("title", "Projects I worked On")

@section('content')
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<a href="{{ route('admin.projects.create') }}" class="btn btn-primary mb-3">Create New Project</a>

			@foreach($projects as $project)
				<tr>
					<td>{{ $project->name }}</td>
					<td><a href="{{ route('admin.projects.show', $project) }}">View Details</a></td>
					<td><a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-outline-primary">Edit</a></td>
					<td>
						<form action="{{ route('admin.projects.destroy', $project) }}" method="POST" style="display: inline;">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this project?')">Delete</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection