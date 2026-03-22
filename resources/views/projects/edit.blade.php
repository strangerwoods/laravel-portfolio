@extends("layouts.master")

@section("title", "Edit Project Information")

@section("content")

	<form action="{{ route('projects.update', $project) }}" method="POST">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" class="form-control" required value="{{ $project->name }}">
		</div>
		<div class="form-group">
			<label for="client">Client</label>
			<input type="text" name="client" id="client" class="form-control" required value="{{ $project->client }}">
		</div>
		<div class="form-group">
			<label for="period">Period</label>
			<input type="date" name="period" id="period" class="form-control" required value="{{ $project->period }}">
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" id="description" class="form-control" rows="4" required>{{ $project->description }}</textarea>
		</div>
		<button type="submit" class="btn btn-primary">Save</button>
	</form>

@endsection