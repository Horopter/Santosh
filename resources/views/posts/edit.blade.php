@extends('main')
@section('tabname', ' | Edit Post')
@section('intro-header-img','img/create-bg.jpg')
@section('image-align','center')
@section('update-call')
{!!Form::model($post,['route'=> ['posts.update', $post -> id], 'method' => 'PUT'])!!}
@endsection
@section('page-title')
{!! Form:: label('title','Title :')!!}
{!! Form::text('title',null,["class" => 'form-control'])!!}
@endsection
@section('page-subtitle')
{!! Form:: label('subtitle','Subtitle :')!!}
{!! Form::text('subtitle',null,["class" => 'form-control'])!!}
@endsection
@section('timestamps')	
Created At: {{ date('M j, Y h:i a',strtotime($post-> created_at )) }} | Last Updated At: {{ date('M j, Y h:i a',strtotime($post-> updated_at)) }}
@endsection
@section('content')
	<div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        	{!! Form:: label('body','Post Body :')!!}
        	{!!Form::textarea('body',null,["class" => 'form-control'])!!}
        </div>
    </div>
@endsection
@section('floaters')
	@include('partials._update')
    @include('partials._cancelChanges')
@endsection
@section('submit-call')
{!!Form::close()!!}
@endsection