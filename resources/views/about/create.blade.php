@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-10 col-md-offset-1">
                {!! Form::open(['url' => 'about/store', 'method' => 'post']) !!}
                <div class="col-xs-12">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title', "", ['class' => 'form-control']) }}
                </div>
                <div class="col-xs-12">
                    {{ Form::textarea('about_text', "", ['class' => 'form-control']) }}
                </div>
                <div class="col-xs-12">
                    {{ Form::submit("Create about section", ['class' => 'btn btn-primary']) }}
                    <a href='{{ url("/") }}' class="btn btn-link">Cancel</a>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">window.editable = true;</script>
@endsection
