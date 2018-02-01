<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--> <!DOCTYPE html>
    <head>
        <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
        <?php echo $__env->make('umum/head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body>
        <section id="container">
        <!--header start-->
            <header class="header fixed-top clearfix">
                <?php echo $__env->make('umum/logo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!--logo end-->
                <?php echo $__env->make('umum/topnav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </header>
            <!--header end-->
            <!--sidebar start-->
                <?php echo $__env->make('umum/sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <!-- ISI -->
                    <?php echo $__env->yieldContent('main'); ?>
                    <!-- //ISI -->
                </section>
                <?php echo $__env->make('umum/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </section>
        <!--main content end-->
        </section>
        <?php echo $__env->make('umum/bottomscript', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
