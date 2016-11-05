@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if(Auth::check())
                <a href='{{ url("/projects") }}' class="btn btn-link">
                    <i class="glyphicon glyphicon-arrow-left fa-btn"></i>Back
                </a>
                <a href='{{ url("/projects/$project->title/edit") }}' class="btn btn-link">
                    <i class="fa fa-pencil fa-btn"></i>Edit
                </a>
                {!! Form::open(['url' => ["projects/$project->title"], 'method' => 'delete']) !!}
                    <button type="submit" class="btn btn-link">
                        <span class="text-danger"><i class="fa fa-trash fa-btn"></i>Delete</span>
                    </button>
                {!! Form::close() !!}
                @endif
                <h3>{{ str_replace("-", " ", $project->title) }}</h3>

                <h4>{{ $project->blurb }}</h4>

                <div class="col-xs-12">{!! html_entity_decode($project->description) !!}</div>
            </div>
        </div>
    </div>
@endsection
