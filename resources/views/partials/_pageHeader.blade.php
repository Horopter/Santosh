<header class="intro-header" style="background-image: url({{ URL::to('/') }}/@yield('intro-header-img')); background-position: @yield('image-align')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>@yield('page-title')</h1>
                        <hr class="small">
                        <span class="subheading">@yield('page-subtitle')</span>
                        <span class="subheading">
                            @yield('timestamps')
                        </span>
                    </div>                    
                </div>
            </div>
        </div>
</header>
