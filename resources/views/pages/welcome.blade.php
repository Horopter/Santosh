@extends('main')
@section('tabname', ' | Welcome ')
@section('intro-header-img','img/home-bg.jpg')
@section('image-align','top')
@section('page-title','Horopter')
@section('page-subtitle','Sic Parvis Magna')
@section('content')
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @include('partials._allPosts',array('posts' => $posts, 'source' => "welcome"))
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
@endsection
@section('floaters')
    @include('partials._createPost')
@endsection