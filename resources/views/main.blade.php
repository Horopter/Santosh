<!DOCTYPE html>
<html lang="en">
<head>
@include('partials._head')
</head>
<body style="background-image:url({{ URL::to('/') }}/img/bg-pattern.png); background-repeat: repeat-x repeat-y;">
    <!-- Navigation -->
    @include('partials._nav')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    @yield('update-call')
    @include('partials._pageHeader')
    @include('partials._messages')
    <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>
    <hr>
    <!-- Footer -->
    <footer>
    @include('partials._footer')
    </footer>
    @yield('floaters')
    @yield('submit-call')
    @include('partials._javascriptInclusions')    
</body>
</html>
