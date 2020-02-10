@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<!-- SUBHEADER -->
<div id="subheader" class="contact">
  <div class="subheader-text">
    <h1>CompuRepair Contact</h1>
    <h2>Tout nos canneaux de com</h2>
  </div>
</div>
<!-- END OF SUBHEADER -->

<!-- CONTACT FORM -->
<div class="contact-elements">

 <div class="row">
  <div class="col-sm-3">
    <div class="contactmethod darkgray">
      <h5>Téléphone</h5>
      <p>Le meilleurs moyens d'entrer en contact avec nous</p>
      <p><span>Depuis la france: 09 72 21 25 18</span><span>Depuis l'etranger: +33 9 72 21 25 18</span></p>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="contactmethod blue">
      <h5>CLiveChat</h5>
      <p>LiveChat (pas encore dispo)</p>
      <div class="text-center"><a class="mtr-btn button-raised ripple" href="javascript:void(0)">CHAT (OFFLINE)</a></div>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="contactmethod green">
      <h5>Ticket Incident</h5>
      <p>Rapide et offre un suivi de l'avencement de votre incident</p>
      <p><span><a href="">Soumettre un ticket</a> via votre </span><span><a href="">espace client</a></span></p>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="contactmethod purple">
      <h5>Nous trouver</h5>
      <p><span>n° Rue</span><span>Ville, CP</span><span>+Info</span></p>
      <p><span><a href="">Maps</a></span></p>
    </div>
  </div>
</div>

<div class="spacing-75"></div>

<div class="row">

  <div class="col-sm-4">
    <h3>Contact CompuRepair</h3>
    <div class="titleborder pink">
<div class="titleborder_left"></div>
<div class="titleborder_sign"></div>
</div>
    <h4>Vous avez une question ?</h4>
    <p>Envoyez-nous un mail ou appelez-nous.</p>
    <p>Chez CompuRepair nous avons a coeur de rester a votre écoute quelque soit votre demande.</p>
  </div>

  <div class="col-sm-8">
    <h3>GET IN TOUCH</h3>
    <div class="titleborder pink fullwidth">
<div class="titleborder_left"></div>
<div class="titleborder_sign"></div>
</div>
    <div id="sendstatus"></div>
    <div id="contactform">
      <form method="post" action="#" class="material">
        <p><input type="text" class="form-control" name="name" id="name" placeholder="Name" tabindex="1" /></p>
        <p><input type="text" class="form-control" name="email" id="email" placeholder="Email" tabindex="2" /></p>
        <p><textarea class="form-control" name="comments" id="comments" cols="12" rows="6" placeholder="Message" tabindex="3"></textarea></p>
        <p><input type="button" name="submit" id="submit" class="mtr-btn button-fab ripple" value="Send"/></p>
      </form>
    </div>
  </div>
</div>
<!-- END OF CONTACT FORM -->

</div>


<!-- Map -->

<div id="map_wrapper">
  <div id="map_canvas" class="mapping"></div>
</div>

 <!--End of Map -->
@endsection