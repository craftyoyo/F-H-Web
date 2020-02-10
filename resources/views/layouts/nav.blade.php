<!-- TOP NAV -->
<div class="topmenu">
  <div class="row">
    <div class="col-sm-3">
      <ul class="top left">
        <li><i class="fa fa-phone"></i>0972212518 (Prix d'un appel local depuis une ligne fixe)</li>
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

        <li><i class="fa fa-commenting-o"></i> <a href="#">Live Chat</a></li>
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
      <a href="/">Techrepair
      </a>
    </div>
  </div>
  <div class="col-sm-9">

    <nav id="desktop-menu">
      <ul class="sf-menu" id="navigation">
            <li><a href="/contact">Contactez-nous</a></li>
            <!--<li><a href="/faq">FAQ</a></li>-->
        <li><a href="/about">A propos</a></li>
      </ul>
    </nav>
  </div>
</div>
</div>
<!-- END OF HEADER -->