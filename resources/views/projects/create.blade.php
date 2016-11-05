@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {!! Form::open(['url' => 'projects', 'method' => 'post']) !!}
                    <div class="col-xs-12">
                        {{ Form::label('title') }}
                        {{ Form::text('title', '', ['class' => 'form-control']) }}
                    </div>
                    <div class="col-xs-12">
                        {{ Form::label('blurb') }}
                        {{ Form::text('blurb', '', ['class' => 'form-control']) }}
                    </div>
                    <div class="col-xs-12">
                        {{ Form::label('description') }}
                        {{ Form::textarea('description', '', ['class' => 'form-control']) }}
                    </div>
                    <div class="col-xs-12">
                        {{ Form::label('link') }}
                        {{ Form::text('link', '', ['class' => 'form-control']) }}
                    </div>
                    <div class="col-xs-12">
                        {{ Form::label('background') }}
                        {{ Form::text('background', '', ['class' => 'form-control']) }}
                    </div>
                    <div class="col-xs-12">
                        {{ Form::submit('Create Project', ['class' => 'btn btn-primary']) }}
                        <a href="{{url('projects')}}" class="btn btn-link">Cancel</a>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <script type="text/javascript">window.editable = true;</script>
@endsection
