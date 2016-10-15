@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if(Auth::check())
                <a href='{{ url("/projects/$project->title/edit") }}' class="btn btn-link">Edit</a>
                @endif
                <h3>{{ $project->title }}</h3>

                <h4>{{ $project->blurb }}</h4>

                <div class="col-xs-6">{!! html_entity_decode($project->description) !!}</div>
            </div>
        </div>
    </div>
@endsection
