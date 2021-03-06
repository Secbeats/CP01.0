@include('includes.head')
@if(Auth::user())
    @include('includes.auth-menus')
@else
    @include('includes.menus')
@endif
@if(!Auth::user())
    @include('includes.slider')
@endif
@if(Auth::user())
    @include('includes.sidebar')
@endif
@yield('content')
@if(Auth::user())
    @include('includes.sidebar-js')
@endif
@include('includes.footer')