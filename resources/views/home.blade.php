@extends('layouts.app')

@section('title', 'Home')

@section('content')
    
<!-- Video -->
<div id="home-intro">
  <div class="home-intro-container">
    <div class="introcaption">
      <h2>TechRepair vous propose des solutions <span id="js-rotating">de Support, d'Infogérance, de Dépannage, d'HelpDesk</span> Pour les Pros ou les Particuliers</h2>
      <h4></h4>
      <h4></h4>
    </div>

    <video autoplay loop muted poster="images/video-poster.jpg" class="hidden-xs">
      <source src="video/fh-vid.webm" type="video/mp4">
          </video>
        </div>
      </div>
      <!-- End of Video -->

      <!-- Features  -->
      <div class="introcolumns">
       <div class="row">
        <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
          <div class="circle red"><i class="fa fa-rocket"></i></div>
          <h4>Rapidité</h4>
          <p>Lorsque vous nous confier une taches elle deviens notre priorité numero une!</p>
        </div>

        <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
          <div class="circle purple"><i class="fa fa-gratipay"></i></div>
          <h4>Confiance</h4>
          <p>Nous vous garentisson une securite de vos données lorsque vous nous confié </p>
        </div>

        <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="circle orange"><i class="fa fa-gg"></i></div>
          <h4>CMS en auto install</h4>
          <p>Installer vos cms préférés en un click est lancé votre site rapidement.</p>
        </div>
      </div>
    </div>
    <!-- End of Features  -->

    <!-- PRICE BOXES -->
<div class="pricingbox servers">
  <div class="row">
    <div class="col-sm-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
      <h3>Nos Tarifs</h3>
      <div class="titleborder dark centered">
        <div class="titleborder_left"></div>
        <div class="titleborder_sign"></div>
        <div class="titleborder_right"></div>
      </div>
      <p>Voici une liste de nos tarifs bien sûr nous avons listé que les demande les plus fréquentes mais si vous avez une demande spécifique merci de nous contacter.</p>
    </div>
  </div>

  <div class="row spacing-25">
    
    

      <table class="server-products-table responsive tablesaw tablesaw-stack">
        <thead>
          <tr>
            <th>Service/Produit</th>
            <th>Descriptions</th>
            <th>Commentaire</th>
            <th>Prix</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Récupération de donneés, 120Go ou moins</td>
            <td>Récupération de donneés et sauvegarde</td>
            <td>Tarif unique si moins de 2H si plus de 2H 11,50€/Heure</td>
            <td>35€</td>
            
            </td>
          </tr>
          <tr>
            <td>Récupération de donneés, plus de 120Go</td>
            <td>Récupération de donneés et sauvegarde</td>
            <td>Nous vous offrons la 1ere heure!</td>
            <td>0,50€/Go + 11,50€/H</td>
            
            </td>
          </tr>
          <tr>
            <td>Réparation batterie smartphone</td>
            <td>Remplacement et calibration de votre batterie</td>
            <td>Nous pouvons remplacer votre batterie de smartphone tout marque</td>
            <td>40€</td>

            
            </td>
          </tr>
          <tr>
            <td>Dépannage a distance</td>
            <td>Dépannage a distance de votre PC, MAC, Linux</td>
            <td>Nétoiyage de votre PC + verification que votre systeme est securisé. Tarif a l'heure sauf si le probléme est résolus avant l'heure entamé dans ce cas 7€</td>
            <td>11,50€/H</td>

            
            </td>
          </tr>
          <tr>
            <td>Gestion serveur</td>
            <td>Gestion de votre serveur Windows, Linux</td>
            <td>Nous pouvons gérer votre serveur web, BDD, AD+foret</td>
            <td>11,50€</td>

            
            </td>
          </tr>
        </tbody>
      </table>
	  <p>Pour toute autre demande merci de contacter : devis@ysavary.fr</p>
    </div>
</div>


   <!-- FEATURES -->
  <div class="features-tabs">
    <div class="row">
      <div class="col-sm-12">

       <!-- TABS -->
       <div class="tabbable tabs-top-horizontal">
      
        <div class="tab-content">

         <div class="tab-pane fade in active" id="managed">
           <h4>Hébergez votre site web en toute tranquillité grâce a notre manager</h4>
           <p class="subtitle">Votre hébergement web économique et simple à utiliser.</p>

           <div class="row spacing-25">
            <div class="col-md-11 col-sm-12 center-block">

              <div class="block-grid-sm-3 block-grid-xs-1 fully-managed">

                <div class="block-grid-item">
                  <img src="images/icon1.png" alt="" />
                  <h5>CMS en auto install</h5>
                  <p>Installer vos cms préférés en un click est lancé votre site rapidement.</p>
                </div>

                <div class="block-grid-item">
                  <img src="images/icon2.png" alt="" />
                  <h5>24/7/365 SUPPORT</h5>
                  <p>Un support réactif et efficace pour répondre à vos attentes</p>
                </div>

                <div class="block-grid-item">
                 <img src="images/icon3.png" alt="" />
                 <h5>99% UPTIME SLA</h5>
                 <p>Fresh-heberg garantit 99% de disponibilité sur tous les serveurs .</p>
               </div>

               <div class="block-grid-item">
                <img src="images/icon4.png" alt="" />
                <h5>Redondance</h5>
                <p>Deux serveurs dédiés redondants, synchronisés toutes les 1/2 heure pour rendre vos services toujours disponibles.</p>
              </div>

              <div class="block-grid-item">
                <img src="images/icon5.png" alt="" />
                <h5>BACKUPS</h5>
                <p>Backup automatique plusieurs fois par jour.</p>
              </div>

              <div class="block-grid-item">
               <img src="images/icon6.png" alt="" />
               <h5>Sécurité</h5>
               <p>Toutes les informations transitant entre nos serveurs sont crypté et sécurisé</p>
             </div>


           </div>
         </div>
       </div>

     </div>

     <div class="tab-pane fade" id="security">
       <h4>SECURE WEB HOSTING SOLUTIONS</h4>
       <div class="row">
            <div class="col-sm-12">
      <div class="block-grid-sm-3 block-grid-xs-1 security">

                <div class="block-grid-item">
                  <div class="security-tab-icon">
                  <i class="fa fa-expeditedssl"></i>
                  </div>
                  <div class="security-tab-feature">
                  <h5>PREVENTION OF ATTACKS</h5>
                  <p>Indicator communities positive social change respect sustainability campaign.</p>
                  </div>
                </div>

                <div class="block-grid-item">
                  <div class="security-tab-icon">
                  <i class="fa fa-file-text"></i>
                  </div>
                  <div class="security-tab-feature">
                  <h5>VULNERABILITY REPORTS</h5>
                  <p>Indicator communities positive social change respect sustainability campaign.</p>
                  </div>
                </div>

                 <div class="block-grid-item">
                  <div class="security-tab-icon">
                  <i class="fa fa-key"></i>
                  </div>
                  <div class="security-tab-feature">
                  <h5>HARDENING SYSCTL</h5>
                  <p>Indicator communities positive social change respect sustainability campaign.</p>
                  </div>
                </div>

                <div class="block-grid-item">
                  <div class="security-tab-icon">
                  <i class="fa fa-umbrella"></i>
                  </div>
                  <div class="security-tab-feature">
                  <h5>SECURITY AUDIT</h5>
                  <p>Indicator communities positive social change respect sustainability campaign.</p>
                  </div>
                </div>

                <div class="block-grid-item">
                  <div class="security-tab-icon">
                  <i class="fa fa-life-ring"></i>
                  </div>
                  <div class="security-tab-feature">
                  <h5>VERIFICATION OF LOG FILES</h5>
                  <p>Indicator communities positive social change respect sustainability campaign.</p>
                  </div>
                </div>

                 <div class="block-grid-item">
                  <div class="security-tab-icon">
                 <i class="fa fa-diamond"></i>
                  </div>
                  <div class="security-tab-feature">
                  <h5>CONFIGURED FIREWALL</h5>
                  <p>Indicator communities positive social change respect sustainability campaign.</p>
                  </div>
                </div>


           </div>
     </div>
     </div>
     </div>

     <div class="tab-pane fade" id="backups">
       <h4>SITE BACKUPS & RESTORE</h4>
       <p class="subtitle">Indicator communities positive social change respect sustainability campaign. Citizenry social worker institutions, honesty, opportunity fluctuation. Transform, social analysis, developing, dedicated countries.</p>

       <div class="row spacing-25">
       <div class="col-md-11 col-sm-12 center-block">
       <div class="row no-gutter">
       <div class="backups-restore">
       <div class="col-sm-3 backupcolumn">
       <h5 class="blue">High Performance Backup</h5>
       <p>Necessities momentum raise awareness; experience in the field countries fight against malnutrition empower civic engagement immunize</p>
       </div>
       <div class="col-sm-3 backupcolumn">
       <h5 class="purple">Data Retention Policy</h5>
       <p>Mobilize assessment expert strengthen democracy public institutions; non-partisan honor gender equality voice. Local synthesize, empowerment</p>
       </div>
        <div class="col-sm-3 backupcolumn">
       <h5 class="orange">Central Backup Repository</h5>
       <p>Dignity economic security, freedom international carbon emissions reductions. Climate change, Aga Khan, challenges The Elders sanitation</p>
       </div>
        <div class="col-sm-3 backupcolumn">
       <h5 class="lightblue">Simultaneous Restores</h5>
       <p>Crowdsourcing raise awareness public sector safety, breakthrough insights harness expanding community ownership. Medecins du Monde</p>
       </div>
       </div>
       </div>
       </div>
</div>
     </div>


     <div class="tab-pane fade" id="emails">
       <h4>EMAIL HOSTING SERVICES</h4>
       <div class="row spacing-25">
        <div class="col-md-6 col-sm-12"><img src="images/mail2.jpg" alt=""/></div>

       <div class="col-md-6 col-sm-12"> <p>Necessities momentum raise awareness; experience in the field countries fight against malnutrition empower civic engagement immunize.</p>
       <p>Visionary employment voice gender equality development social challenges community meaningful connect. Metrics human being accessibility collaborative shifting landscape social.</p>

       <ul>
        <li><i class="fa fa-long-arrow-right"></i> POP/IMAP/Webmail</li>
        <li><i class="fa fa-long-arrow-right"></i> Collaboration tools</li>
        <li><i class="fa fa-long-arrow-right"></i> Anti-spam protection</li>
        <li><i class="fa fa-long-arrow-right"></i> Full mobile support</li>
      </ul></div>

        </div>
     </div>

     <div class="tab-pane fade" id="monitoring">
      <h4>24x7 MONITORING</h4>
     <div class="row spacing-25">
             <div class="col-md-6 col-sm-12"><img src="images/monitoring-tab-image.png" alt=""/></div>

       <div class="col-md-6 col-sm-12"> <p>Mobilize assessment expert strengthen democracy public institutions; non-partisan honor gender equality voice. Local synthesize, empowerment.</p>
       <p>Innovation smart cities, necessities, catalyze network facilitate assessment expert. Legal aid philanthropy celebrate amplify, fight against oppression, Bill and Melinda Gates asylum.</p>

       <ul>
        <li><i class="fa fa-long-arrow-right"></i> Crowdsourcing raise</li>
        <li><i class="fa fa-long-arrow-right"></i> Expanding community</li>
        <li><i class="fa fa-long-arrow-right"></i> Insights harness</li>
        <li><i class="fa fa-long-arrow-right"></i> Sector safety</li>
      </ul></div>

        </div>
        </div>

     <div class="tab-pane fade" id="cdn">
       <h4>STOP TO SLOW LOADING SITES</h4>

      <div class="row spacing-25">
             <div class="col-md-6 col-sm-12"><img src="images/cdn-tab-image.png" alt=""/></div>

       <div class="col-md-6 col-sm-12"> <p>Mobilize assessment expert strengthen democracy public institutions; non-partisan honor gender equality voice. Local synthesize, empowerment.</p>
       <p>Innovation smart cities, necessities, catalyze network facilitate assessment expert. Legal aid philanthropy celebrate amplify, fight against oppression, Bill and Melinda Gates asylum.</p>

       <ul>
        <li><i class="fa fa-long-arrow-right"></i> Crowdsourcing raise</li>
        <li><i class="fa fa-long-arrow-right"></i> Expanding community</li>
        <li><i class="fa fa-long-arrow-right"></i> Insights harness</li>
        <li><i class="fa fa-long-arrow-right"></i> Sector safety</li>
      </ul></div>

        </div>
        </div>



   </div>
 </div>
 <!-- END OF TABS -->

</div>
</div>
</div>
<!-- END OF FEATURES -->

@endsection