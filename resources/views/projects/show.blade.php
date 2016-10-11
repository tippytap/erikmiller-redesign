@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3>{{ $project->title }}</h3>
                <div class="col-xs-6">{{ $project->description }}</div>
            </div>
        </div>
    </div>
@endsection
