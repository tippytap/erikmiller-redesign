@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @foreach($projects as $project)
                    <h3><a href='{{ url("/projects/$project->title") }}'>{{str_replace("-", " ", $project->title)}}</a></h3>
                    <p>{{ $project->blurb }}</p>
                    @if(Auth::check())
                        <a href='{{ url("/projects/$project->title/edit") }}' class="btn btn-link">Edit</a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
