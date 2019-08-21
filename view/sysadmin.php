<?php
$title = "Com'On Réal - Index";
ob_start();
?>
<!-- SUBHEADER -->
<div id="subheader" class="dedicated-servers">
  <div class="subheader-text">
    <h1>Service Sysadmin</h1>
    <h2>Nous installons et sécurise vos serveurs dédiés ou vps</h2>
  </div>
</div>
<!-- END OF SUBHEADER -->

<!-- PRICE BOXES -->
<div class="pricingbox servers">
  <div class="row">
    <div class="col-sm-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
      <h3>Nos prix : (Négociable)</h3>
      <div class="titleborder dark centered">
        <div class="titleborder_left"></div>
        <div class="titleborder_sign"></div>
        <div class="titleborder_right"></div>
      </div>
      <p>Voici une liste de nos prix bien sûr nous avons listé que les demande les plus fréquentes mais si vous avez une demande spécifique merci de nous contacter.</p>
    </div>
  </div>

  <div class="row spacing-25">
    
    

      <table class="server-products-table responsive tablesaw tablesaw-stack">
        <thead>
          <tr>
            <th>Logiciel</th>
            <th>Descriptions</th>
            <th>Commentaire</th>
            <th>Prix</th>
            <th>Commander</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Apache ou Nginx</td>
            <td>Serveur Web</td>
            <td>inclut php (version de votre choix.</td>
            <td>0.50€</td>
            <td><span><a class="mtr-btn button-fab ripple btn-sm" href="javascript:void(0)">Acheter</a></span>
            </td>
          </tr>
          <tr>
            <td>Mysql - SQLite - MongoDB - Redis</td>
            <td>Base de données</td>
            <td>Installation de Phpmyadmin pour géré  vos base de données.</td>
            <td>0.50€</td>
            <td><span><a class="mtr-btn button-fab ripple btn-sm" href="javascript:void(0)">Acheter</a></span>
            </td>
          </tr>
          <tr>
            <td>CloudFlare + domaine</td>
            <td>DNS</td>
            <td>On gére vos DNS sur votre nom de domain.</td>
            <td>0.50€</td>

            <td><span><a class="mtr-btn button-fab ripple btn-sm" href="javascript:void(0)">Acheter</a></span>
            </td>
          </tr>
          <tr>
            <td>1 BungeeCord + 5 serveur Minecraft</td>
            <td>Serveur Minecraft</td>
            <td>Installation de serveur Minecraft relier en BungeeCord</td>
            <td>1.50€</td>

            <td><span><a class="mtr-btn button-fab ripple btn-sm" href="javascript:void(0)">Acheter</a></span>
            </td>
          </tr>
          <tr>
            <td>Xenforo, NamelessMc, Wordpress, PhpBB et autres</td>
            <td>CMS</td>
            <td>Installation du cms de votre choix</td>
            <td>0.50€</td>

            <td><span><a class="mtr-btn button-fab ripple btn-sm" href="javascript:void(0)">Acheter</a></span>
            </td>
          </tr>
          <tr>
            <td>Teamspeak 3 - Mumble</td>
            <td>Serveur Vocal</td>
            <td>Installation d'un serveur Vocal</td>
            <td>0.50€</td>

            <td><span><a class="mtr-btn button-fab ripple btn-sm" href="javascript:void(0)">Acheter</a></span>
            </td>
          </tr>
          <tr>
            <td>LetsEncrypt</td>
            <td>SSL</td>
            <td>Installation d'un certificat ssl (https)</td>
            <td>0.50€</td>

            <td><span><a class="mtr-btn button-fab ripple btn-sm" href="javascript:void(0)">Acheter</a></span>
            </td>
          </tr>
          <tr>
            <td>Multicraft Tcadmin Pterodactyl vestacp et autres</td>
            <td>Panel</td>
            <td>Installation d'un panel de votre choix</td>
            <td>2€<</td>

            <td><span><a class="mtr-btn button-fab ripple btn-sm" href="javascript:void(0)">Acheter</a></span>
            </td>
          </tr>
          <tr>
            <td>OPENVPN</td>
            <td>VPN</td>
            <td>Installation d'un serveur vpn</td>
            <td>1.50€</td>

            <td><span><a class="mtr-btn button-fab ripple btn-sm" href="javascript:void(0)">Acheter</a></span>
            </td>
          </tr>
        </tbody>
      </table>
	  <p>Pour toute autre demande merci de contacter : sysadmin@fresh-heberg.fr</p>
    </div>
</div>


<!-- END OF FEATURES -->

<? $content = ob_get_clean(); ?>

