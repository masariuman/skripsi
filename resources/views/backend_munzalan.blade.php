<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--> <!DOCTYPE html>
    <head>
        <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
        @include('umum2/head')
    </head>
    <body>
        <section id="container">
        <!--header start-->
            <header class="header fixed-top clearfix">
                @include('umum2/logo')
                <!--logo end-->
                @include('umum2/topnav')
            </header>
            <!--header end-->
            <!--sidebar start-->
                @include('umum2/sidebar2')
            <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <!-- ISI -->
                    @yield('main')
                    <!-- //ISI -->
                </section>
                @include('umum2/footer')
            </section>
        <!--main content end-->
        </section>
        @include('umum2/bottomscript')
    </body>
</html>
