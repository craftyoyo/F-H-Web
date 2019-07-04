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
    <form method="post" action="https://whmcs.audemedia.com/dologin.php?systpl=dataservwhmcs" class="material">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><i class="fa fa-lock"></i>LOGIN TO YOUR ACCOUNT</h4>
        </div>
        <div class="modal-body">
          <input type="text" name="username" placeholder="E-mail Address">
          <input type="password" name="password" placeholder="Password">
          <button type="submit" class="mtr-btn button-fab">LOGIN</button>
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