@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<!-- SUBHEADER -->
<div id="subheader" class="contact">
  <div class="subheader-text">
    <h1>We'd love to hear from you</h1>
    <h2>Our friendly Support Team is available to help you 24 hours a day</h2>
  </div>
</div>
<!-- END OF SUBHEADER -->

<!-- CONTACT FORM -->
<div class="contact-elements">

 <div class="row">
  <div class="col-sm-3">
    <div class="contactmethod darkgray">
      <h5>Sales</h5>
      <p>Times democracy change movements process medicine. Sustainable future.</p>
      <p><span>Phone: (858) 319-SERV</span><span><a href="">hello@dataserv.io</a></span></p>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="contactmethod blue">
      <h5>Chat to us</h5>
      <p>Women and children eradicate Millennium Development Goals peaceful.</p>
      <div class="text-center"><a class="mtr-btn button-raised ripple" href="javascript:void(0)">CHAT ONLINE</a></div>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="contactmethod green">
      <h5>Technical Support</h5>
      <p>Involvement. Reproductive rights, vulnerable population raise awareness.</p>
      <p><span><a href="">Submit a ticket</a> via Help Desk</span><span>Visit our <a href="">support page</a></span></p>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="contactmethod purple">
      <h5>Headquarters</h5>
      <p><span>132 University Avenue</span><span>Minneapolis, US, CI 34331</span><span>Atrium, 6th floor</span></p>
      <p><span><a href="">info@dataserv.io</a></span></p>
    </div>
  </div>
</div>

<div class="spacing-75"></div>

<div class="row">

  <div class="col-sm-4">
    <h3>CONTACT DATASERV</h3>
    <div class="titleborder pink">
<div class="titleborder_left"></div>
<div class="titleborder_sign"></div>
</div>
    <h4>Have questions?</h4>
    <p>Open source; conflict resolution cornerstone cooperation, transform, Bono legitimize research. Change-makers; provide poverty generosity challenges.</p>
  </div>

  <div class="col-sm-8">
    <h3>GET IN TOUCH</h3>
    <div class="titleborder pink fullwidth">
<div class="titleborder_left"></div>
<div class="titleborder_sign"></div>
</div>
    <div id="sendstatus"></div>
    <div id="contactform">
      <form method="post" action="sendmail.php" class="material">
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


<!-- Map 

<div id="map_wrapper">
  <div id="map_canvas" class="mapping"></div>
</div>

 End of Map -->
@endsection