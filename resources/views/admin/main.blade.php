@include('layout.head')

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
        @include('layout.slider')
        <!--  Main wrapper -->
        <div class="body-wrapper">
            @include('layout.header')
			@yield('content')
        </div>
    </div>
    @include('layout.scripts')
</body>
</html>