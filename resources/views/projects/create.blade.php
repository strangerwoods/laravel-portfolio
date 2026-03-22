@extends("layouts.master")

@section("title", "Create New Project")

@section("content")

	<form action="{{ route('projects.store') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="client">Client</label>
			<input type="text" name="client" id="client" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="period">Period</label>
			<input type="date" name="period" id="period" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" id="description" class="form-control" rows="4" required></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Save</button>
	</form>

@endsection