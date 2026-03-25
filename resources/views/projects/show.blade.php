@extends("layouts.master")

@section("content")
<div class="container py-5">
    <h1 class="display-4 fw-bold">{{ $project->name }}</h1>

    <div class="row">
        <div class="col-md-6">
            <dl class="row">
                <dt class="col-sm-3">Client</dt>
                <dd class="col-sm-9">{{ $project->client }}</dd>
                <dt class="col-sm-3">Type</dt>
                <dd class="col-sm-9">{{ $project->type->name }}</dd>
                <dt class="col-sm-3">Period</dt>
                <dd class="col-sm-9">{{ $project->period }}</dd>
                <dt class="col-sm-3">Technologies</dt>
                <dd class="col-sm-9">
                    @foreach($project->technologies as $technology)
                        <span class="badge" style="background-color: {{ $technology->color }}; color: white;">{{ $technology->name }}</span>
                    @endforeach
                </dd>
            </dl>
        </div>
        <div class="col-md-6">
            <p class="text-break">{{ $project->description }}</p>
        </div>
    </div>
</div>
@endsection
