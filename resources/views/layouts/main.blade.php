<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('inc.head')
    @yield('head')
</head>
<body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98" style="background-color: white">
    <div id="app">
        <!-- Include the loader at the begining -->
        @include('inc.loading')
        <!-- end the Included loader -->


        <!-- Include the header -->
        @include('inc.header')
        <!-- end included header -->


        <!-- The main content-->
        <main class="py-4">
            @yield('content')
        </main>
        <!-- End main content -->

        <!-- Include the message us area -->
        @include('inc.message-us')
        <!-- end the Included message-us box-->



        <!-- Include the footer -->
        @include('inc.footer')
        <!-- end Included footer -->


        <!-- Include the copyright -->
        @include('inc.copyright')
        <!-- end Included copyright -->


        <!-- Include the scripts -->
        @include('inc.scripts')
        <!-- end the included scrips -->

        @yield('scripts')
    </div>
</body>
</html>
