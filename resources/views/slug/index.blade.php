@extends('main')
@section('tabname', ' | Index ')
@section('intro-header-img','img/home-bg.jpg')
@section('image-align','top')
@section('page-title','All Posts')
@section('page-subtitle','Paradise of your thoughts')
@section('content')
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @include('partials._allPosts',array('posts' => $posts,'source' => 'index'))
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        {!!$posts->links();!!}
                    </li>
                </ul>
            </div>
        </div>
@endsection