<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php if (isset($title)): ?> <?= $title ?> <?php else: ?>Fresh-Heberg | WEB Hosting & VPN<?php endif ?></title>
  <link rel="shortcut icon" href="/assets/images/favicon.png" />
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

  <!-- Bootstrap & Styles -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="/assets/css/block_grid_bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/owl.carousel.css">
  <link rel="stylesheet" href="/assets/css/owl.theme.css">
  <link rel="stylesheet" href="/assets/css/animate-custom.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/slicknav.min.css">
  <link href="/assets/css/style.css" rel="stylesheet">
</head>

 <!-- TOP NAV -->
 <div class="topmenu">
  <div class="row">
    <div class="col-sm-3">
      <ul class="top left">
        <li><i class="fa fa-phone"></i>0033972212518 (Prix d'un appel local depuis la france)</li>
      </ul>
    </div>
    <div class="col-sm-9">
      <ul class="topright">
        <?php if (isset($_SESSION['user_id'])) { ?>
				<li><p class="navbar-text"><strong>Welcome!</strong> You're signed in as <strong><?php echo $_SESSION['user_name']; ?></strong></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
          <li><i class="fa fa-unlock-alt"></i> <a href="#" data-toggle="modal" data-target="#LoginModal">Espace Client</a></li>
          <li><i class="fa fa-user"></i> <a href="#" data-toggle="modal" data-target="#RegisterModal">Créer un compte</a></li>
				<?php } ?>

      <!--  <li><i class="fa fa-commenting-o"></i> <a href="#">Live Chat</a></li>-->
      </ul>
    </div>
  </div>
</div>
<!-- END OF TOP NAV -->

<!-- HEADER -->
<div class="header">
 <div class="row">
  <div class="col-sm-3">
    <div class="logo">
      <a href="index.php"><img src="/assets/images/logo.png" alt="" />
      </a>
    </div>
  </div>
  <div class="col-sm-9">

    <nav id="desktop-menu">
      <ul class="sf-menu" id="navigation">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="#">Produits et services</a>
          <ul>
            <li><a href="web.php">Hebergement web</a></li>
	    <li><a href="vpn.php">VPN</a></li>
            <li><a href="sysadmin.php">Service Sysadmin</a></li>
          </ul>
        </li>
        <li><a href="#">Autres</a>
          <ul>
            <li><a href="apropos.php">A propos</a></li>
            <li><a href="faq.php">FAQ</a></li>
          </ul>
        </li>
      <!--  <li><a href="blog.php">Blog</a></li>
		<li><a href="#">Forum</a></li>-->
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </div>
</div>
</div>
<!-- END OF HEADER -->
<body>
<?= $content ?>
<!-- FOOTER -->
<div class="footer">
  <div class="row">

   <div class="col-sm-3">
    <h4>Produits et services</h4>
    <ul>
      <li><a href="#" title="">Hebergement-web</a></li>
      <li><a href="#" title="">Sysadmin</a></li>
      <li><a href="#" title="">VPS (Bientôt)</a></li>
      <li><a href="#" title="">VPN (Bientôt) </a></li>
      <li><a href="#" title="">Nom-de-domaine (Bientôt)</a></li>
    </ul>
  </div>

  <div class="col-sm-3">
    <h4>Rejoignez-nous</h4>

    <ul>
      <li><a href="#" title="">Twitter</a></li>
      <li><a href="#" title="">Facebook</a></li>
      <li><a href="#" title="">Instagram</a></li>
      <li><a href="#" title="">Github</a></li>
      <li><a href="#" title=""></a></li>
    </ul>
  </div>

  <div class="col-sm-3">
    <h4>Fresh-Heberg</h4>

    <ul>
      <li><a href="#" title="">À propos de nous</a></li>
      <li><a href="#" title="">Politique de confidentialité</a></li>
      <li><a href="#" title="">CGU</a></li>
      <li><a href="#" title="">Termes et conditions</a></li>
      <li><a href="#" title="">Politique DMCA</a></li>
    </ul>
  </div>

  <div class="col-sm-3">
    <h4>S'abonner à notre newsletter</h4>
    <div id="mc_embed_signup">
      <form class="form-inline validate material" action="//audemedia.us7.list-manage.com/subscribe/post?u=b5638e105dac814ad84960d90&amp;id=9345afa0aa" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
       <input id="mce-EMAIL" type="email" name="EMAIL" placeholder="E-mail" required>
       <div style="position: absolute; left: -5000px;">
        <input type="text" name="b_b5638e105dac814ad84960d90_9345afa0aa" tabindex="-1" value="">
      </div>
      <input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="mtr-btn button-blue">
    </form>
  </div>
</div>
</div>
</div>
<!-- END FOOTER -->

<!-- SOCIAL & COPYRIGHT -->
<div class="social">
  <div class="row">
    <div class="col-sm-12">
     <ul class="social-links">
      <li><a href="https://twitter.com/fresh_heberg" title="Twitter"><i class="fa fa-twitter"></i></a></li>
      <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
      <li><a href="https://www.instagram.com/fresh_heberg/" title="Instagram"><i class="fa fa-instagram"></i></a></li>
      <li><a href="#" title="Github"><i class="fa fa-github-alt"></i></a></li>
    </ul>
    <p class="text-center">Copyright© Fresh-Heberg. All rights reserved.</p>
  </div>
</div>
</div>
<!-- END OF SOCIAL & COPYRIGHT -->

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

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/morphext.min.js"></script>
<script src="/assets/js/hoverIntent.js"></script>
<script src="/assets/js/superfish.min.js"></script>
<script src="/assets/js/owl.carousel.js"></script>
<script src="/assets/js/ripple-effect.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/jquery.form.min.js"></script>
<script src="/assets/js/jquery.slicknav.min.js"></script>
<script src="/assets/js/retina.min.js"></script>
<script src="/assets/js/custom.js"></script>
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