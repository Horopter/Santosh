@extends('main')
@section('tabname', ' | View Post')
@section('intro-header-img','img/create-bg.jpg')
@section('image-align','center')
@section('page-title', $post -> title)
@section('page-subtitle', $post -> subtitle)
@section('timestamps')
Created: {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post -> created_at, 'UTC')->setTimezone('Asia/Kolkata')->format('F d, Y @ h:i:s A T') }} | Last Updated: {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post -> updated_at, 'UTC')->setTimezone('Asia/Kolkata')->format('F d, Y @ h:i:s A T') }} | Slug: <a href="{{ url($post -> slug) }}">{{ $post -> slug }}</a>
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