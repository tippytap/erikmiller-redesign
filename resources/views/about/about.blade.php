@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @foreach($abouts as $about)
                <h3>
                    {{$about->title}}
                </h3>
                @if(Auth::check())
                    <a href="{{ url("about/$about->title/edit") }}"><i class="fa fa-pencil fa-btn"></i>Edit</a>
                @endif
                <div class="col-xs-12">{!! html_entity_decode($about->about_text) !!}</div>
            @endforeach
        </div>
    </div>
</div>
@endsection
