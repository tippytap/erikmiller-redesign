@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                    {!! Form::open(['route' => 'projects.create']) !!}
                        <div class="col-xs-12">
                            {{ Form::label('title') }}
                            {{ Form::text('title', '', ['class' => 'form-control']) }}
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
                        </div>
                    {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection
