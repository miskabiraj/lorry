@include('admin.layout.header')
@yield('style')
    @include('admin.layout.navigation')
           @include('admin.layout.error')
            @yield('content')
@include('admin.layout.footer')
@yield('script')

