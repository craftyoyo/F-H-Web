<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') - CompuRepair</title>
        <link rel="shortcut icon" href="images/favicon.png" />
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootstrap & Styles -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/block_grid_bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/animate-custom.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/slicknav.min.css">
        <link href="css/style.css" rel="stylesheet">
    </head>

    @include('layouts.nav')

    <body>

    <!-- CONTENT -->
        @yield('content')
    <!-- END OF CONTENT -->

    @include('layouts.footer')

    <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModal">
    <div class="modal-dialog" role="document">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="material">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-lock"></i>LOGIN TO YOUR ACCOUNT</h4>
            </div>
            <div class="modal-body">
            <input type="text" name="email" placeholder="E-mail Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="mtr-btn button-fab" value="Login">LOGIN</button>
            </div>
        </div>
        </form>
    </div>
    </div>
    <div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="RegisterModal">
    <div class="modal-dialog" role="document">
        <form method="post" action="/manager/login.php" class="material">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-lock"></i>CREATE YOUR ACCOUNT</h4>
            </div>
            <div class="modal-body">
            <input type="text" name="fname" placeholder="First name" required>
            <input type="text" name="lname" placeholder="Last name" required>
            <input type="text" name="mail" placeholder="E-mail Address" required>
            <input type="tel" name="tel" placeholder="Phone Number" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="rpassword" placeholder="Repeat password" required>
            <button type="submit" class="mtr-btn button-fab">Register</button>
            </div>
        </div>
        </form>
    </div>
    </div>

    <a href="#top" id="back-to-top" class="ripple"><i class="fa fa-angle-up"></i></a>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/morphext.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/ripple-effect.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.form.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
    (function($) {
        "use strict";

        $(window).load(function() {
    // ______________ WORDS ROTATOR ON HERO
    $(".introcaption").css({ opacity: "1" });
    $("#js-rotating").Morphext({
        animation: "flipInX",
        separator: ",",
        speed: 2500
    });
    });

        $(document).ready(function() {
        // ______________ DOMAIN SEARCH SHOW/HIDE
        $('#showdomainsearch').click(function() {
        $('.domainform').slideToggle("slow");
        });

        // ______________ TESTIMONIALS CAROUSEL
        $("#testimonials-carousel").owlCarousel({
        items: 3,
        autoPlay: 5000,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 2],
        itemsTablet: [768, 2]
        });
    });

    })(jQuery);
    </script>
    </body>
</html>