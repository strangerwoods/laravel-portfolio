@extends('layouts.master')

@section('content')
	@foreach($projects as $project)
		<div>
			<h2>{{ $project->name }}</h2>
			<a href="{{ route('admin.projects.show', $project) }}">View Details</a>
		</div>
	@endforeach
@endsection