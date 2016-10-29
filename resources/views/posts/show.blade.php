@extends('main')
@section('tabname', ' | View Post')
@section('intro-header-img','img/create-bg.jpg')
@section('image-align','center')
@section('page-title', $post -> title)
@section('page-subtitle', $post -> subtitle)
@section('timestamps')	
Created At: {{ date('M j, Y h:i a',strtotime($post-> created_at )) }} | Last Updated At: {{ date('M j, Y h:i a',strtotime($post-> updated_at)) }}
@endsection
<article>
@section('content')
	<div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        	{{ $post-> body }}
        </div>
    </div>
@endsection
</article>
@section('floaters')
	@include('partials._editPost')
    @include('partials._deletePost')
@endsection