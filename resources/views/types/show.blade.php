@extends('layouts.master')

@section('title', $type->name)

@section('content')
<div class="container py-5">
    <h1 class="display-4 fw-bold">{{ $type->name }}</h1>

    <div class="row">
        <div class="col-md-12">
            <p class="text-break">{{ $type->description }}</p>
        </div>
    </div>
</div>
@endsection
