@extends("layouts.master")

@section("content")
	<h1>{{ $project->name }}</h1>
	<p><strong>Client:</strong> {{ $project->client }}</p>
	<p><strong>Period:</strong> {{ $project->period }}</p>
	<p>{{ $project->description }}</p>
@endsection