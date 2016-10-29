@extends('main')
@section('tabname', ' | New Post')
@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection
@section('intro-header-img','img/create-bg.jpg')
@section('image-align','center')
@section('page-title','Express yourself')
@section('page-subtitle','Let the thoughts flow.')
@section('content')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 style="margin-left:20px;">Create New Post!</h1>
                <hr/>
                {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
    				{{ Form:: label('title','Title :')}}
                    {{ Form:: text('title',null, array('class' => 'form-control' , 'required' => '', 'minlength'=> 5, 'maxlength' => 255))}}
                    <br/>
                    {{ Form:: label('subtitle','Subtitle :')}}
                    {{ Form:: text('subtitle',null, array('class' => 'form-control' , 'required' => '', 'minlength'=> 10, 'maxlength' => 255))}}
                    <br/>
                    {{ Form:: label('body','Post Body :')}}
    				{{ Form:: textarea('body',null, array('class' => 'form-control', 'required' => ''))}}
    				<br/>
    				{{ Form:: submit('Create Post')}}
				{!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection