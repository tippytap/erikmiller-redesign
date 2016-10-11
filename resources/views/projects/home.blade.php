@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @foreach($projects as $project)
                    <h3><a href='{{ url("/projects/$project->title") }}'>{{$project->title}}</a></h3>
                    <a href='{{ url("/projects/$project->title/edit") }}' class="btn btn-link">Edit</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
