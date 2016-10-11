@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <a href='{{ url("/projects/$project->title/edit") }}' class="btn btn-link">Edit</a>
                <h3>{{ $project->title }}</h3>
                <div class="col-xs-6">{!! html_entity_decode($project->description) !!}</div>
            </div>
        </div>
    </div>
@endsection
