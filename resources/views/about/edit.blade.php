@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-10 col-md-offset-1">
                {!! Form::model($about, ['route' => ['about.update', $about->title], 'method' => 'put']) !!}
                <div class="col-xs-12">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title', $about->title, ['class' => 'form-control']) }}
                </div>
                <div class="col-xs-12">
                    {{ Form::label('about_text', 'About Text') }}
                    {{ Form::textarea('about_text', $about->about_text, ['class' => 'form-control']) }}
                </div>
                <div class="col-xs-12">
                    {{ Form::submit("Edit about section", ['class' => 'btn btn-primary']) }}
                    <a href='{{ url("/about") }}' class="btn btn-link">Cancel</a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">window.editable = true;</script>
@endsection
