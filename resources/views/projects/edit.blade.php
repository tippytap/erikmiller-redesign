@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {!! Form::model($project, ['route' => ['projects.update', $project->title], 'method' => 'put']) !!}
                    <div class="col-xs-12">
                        {{ Form::label('title', 'Title') }}
                        {{ Form::text('title', $project->title, ['class' => 'form-control']) }}
                    </div>
                    <div class="col-xs-12">
                        {{ Form::label('blurb', 'Blurb') }}
                        {{ Form::text('blurb', $project->blurb, ['class' => 'form-control']) }}
                    </div>
                    <div class="col-xs-12">
                        {{ Form::label('description') }}
                        {{ Form::textarea('description', $project->description, ['class' => 'form-control']) }}
                    </div>
                    <div class="col-xs-12">
                        {{ Form::label('link') }}
                        {{ Form::text('link', $project->link, ['class' => 'form-control']) }}
                    </div>
                    <div class="col-xs-12">
                        {{ Form::label('background') }}
                        {{ Form::text('background', $project->background, ['class' => 'form-control']) }}
                    </div>
                    <div class="col-xs-12">
                        {{ Form::submit("Update $project->title", ['class' => 'btn btn-primary']) }}
                        <a href='{{ url("projects/") }}' class="btn btn-link">Cancel</a>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <script type="text/javascript">window.editable = true;</script>
@endsection
