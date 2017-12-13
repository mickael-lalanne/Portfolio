<?php
  if (isset($_POST['nom'])) { //Si le formulaire a été envoyé
    if ( !empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['message']) ) {
      $encoding = "utf-8";
      // Preferences for Subject field
      $subject_preferences = array(
          "input-charset" => $encoding,
          "output-charset" => $encoding,
          "line-length" => 76,
          "line-break-chars" => "\r\n"
      );

      // Mail header
      $header = "Content-type: text/html; charset=".$encoding." \r\n";
      $header .= "From: ".$_POST['nom']." <".$_POST['mail']."> \r\n";
      $header .= "MIME-Version: 1.0 \r\n";
      $header .= "Content-Transfer-Encoding: 8bit \r\n";
      $header .= "Date: ".date("r (T)")." \r\n";
      $header .= iconv_mime_encode("Subject", $mail_subject, $subject_preferences);

      $message = 'Message de :'.$_POST['nom'].'<br> Email : '.$_POST['mail'].'<br> Message : '.$_POST['message'];
      // Send mail
      mail('mickael.lalanne03@gmail.com', 'Contact depuis le Portfolio', $message , $header);
      $envoi = true;
    }
    else {
      $envoi = false;
    }
  }
?>

<!doctype html>
<html lang="fr">
  <head>
    <title>Mickaël Lalanne - Développeur Web</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mickaël Lalanne, 21 ans, étudiant en Licence Profesionnelle MIW (BAC +3) dans le Développement Web et Mobile." />

    <link rel="shortcut icon" type="image/x-icon" href="img/icone.png" />

    <!-- Bootstrap CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  </head>
  <body style="font-family: 'Lobster', cursive;">

    <!-- PREMIERE PAGE -->
    <div class="container-fluid blok1">
      <div class="row premierePage">
        <div class="col-xs-12 col-sm-12 col-lg-12 colPremierePage">
          <div class="logosPremierePage">
            <img class="logo" src="img/logoHaut.png" alt="Logo en forme de loup"/>
            <h1>Mickaël Lalanne</h1>
            <img class="logo" src="img/logoBas.png" alt="Logo en forme de loup"/>
            <h2>&lt; Développeur Web /&gt;</h2>
          </div>
        </div>
      </div>
    </div>
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link scroll-smooth" href="#aPropos">A Propos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#cursus">Cursus</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#competences">Compétences</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#portfolio">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    </ul>

    <!-- A PROPOS -->
    <div id="aPropos" class="container-fluid aPropos">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-7 v-center photoProfile">
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-5 v-center justify-content-center">
          <div> <h2>A Propos</h2>
           <p><img src="img/lieu.png" alt="Icone Localisation"/> Tarbes(65), FRANCE<br></p>
           <p><img src="img/mail.png" alt="Icone E-mail"/>  mickael.lalanne03@gmail.com<br></p>
           <p><img src="img/birthday.png" alt="Icone Anniversaire"/> 3 Septembre 1996</p>
           <br><p class="description">Bonjour ! Je m'appelle Mickaël, j'ai 21 ans et je suis actuellement en licence
           profesionnelle MIW à Gap dans l'optique de devenir Développeur Web.</p>
           <div class="logos">
             <a href="https://www.linkedin.com/in/mickael-lalanne" target="_blank" title="Lien Linkedin"><img class="" alt="Logo Linkedin" src="img/linkedin.png"/></a>
             <a href="https://github.com/mickael-lalanne" target="_blank" title="Lien GitHub"><img class="" alt="Logo GitHub" src="img/github.png"/></a>
             <a href="CV-LALANNE-Mickael.pdf" target="_blank" title="Télécharger mon CV"><img class="" alt="Logo CV" src="img/cv.png"/></a>
           </div>
         </div>

         </div>
        </div>
    </div>

    <!-- CURSUS -->
    <div id="cursus" class="container-fluid cursus">
        <h2>Cursus</h2>

      <ul class="timeline">
        <li>
          <div class="tl-circ"></div>
          <div class="timeline-panel">
            <div class="tl-heading">
              <h4>Bac</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>2014</small></p>
            </div>
            <div class="tl-body">
              <p>Obtention du baccalauréat STI2D (Sciences et Technologies de l'Industrie et du Développement Durable) spécialité
                ITEC (Innovation technologique et éco-conception) au lycée Jean Dupuy à Tarbes (65).</p>
            </div>
          </div>
        </li>


        <li class="timeline-inverted">
          <div class="tl-circ"></div>
          <div class="timeline-panel">
            <div class="tl-heading">
              <h4>Bac +2</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>2017</small></p>
            </div>
            <div class="tl-body">
              <p>Obtention du BTS SIO (Services Informatiques aux Organisations) spécialité
                SLAM (Solutions Logicielles et Applications Métiers) au lycée Marie Curie à Tarbes (65).</p>
            </div>
          </div>
        </li>
          <li>
            <div class="tl-circ"></div>
            <div class="timeline-panel">
              <div class="tl-heading">
                <h4>Bac +3</h4>
                <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>2018</small></p>
              </div>
              <div class="tl-body">
                <p>Actuellement en licence professionnelle Développement Web et Mobile - MIW à l'IUT de Gap (05).</p>
              </div>
            </div>
          </li>
      </ul>
    </div>

    <!-- COMPETENCES -->
    <div id="competences" class="container-fluid competences">
      <h2>Compétences</h2>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <h3>Languages</h3>
          <p class="typeCompetence"> HTML </p>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-custom" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
          </div>
          <p class="typeCompetence"> CSS </p>
          <div class="progress progressCompetence">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-custom" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
          </div>
            <p class="typeCompetence"> PHP </p>
            <div class="progress progressCompetence">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-custom" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
            </div>
            <p class="typeCompetence"> Javascript </p>
            <div class="progress progressCompetence">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-custom" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 35%"></div>
            </div>
            <p class="typeCompetence"> C# </p>
            <div class="progress progressCompetence">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-custom" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <h3>Framework / CMS</h3>
              <p class="typeCompetence"> Wordpress </p>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-custom" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
              </div>
              <p class="typeCompetence"> Bootstrap </p>
              <div class="progress progressCompetence">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-custom" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
              </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <h3>Base de données</h3>
              <p class="typeCompetence"> MySQL </p>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-custom" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
              </div>
              <p class="typeCompetence"> phpMyAdmin </p>
              <div class="progress progressCompetence">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-custom" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 81%"></div>
              </div>
              <p class="typeCompetence"> MySQLWorkbench </p>
              <div class="progress progressCompetence">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-custom" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
              </div>
        </div>
      </div>
    </div>

    <!-- PORTFOLIO -->
    <div id="portfolio" class="container portfolio">
    <h2>Portfolio</h2>

    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="img/projetTuteure.png" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Projet Tuteuré</h4>
          <p class="card-text">En cours...</p>
          <p class="card-text"><small class="text-muted">2018</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="img/carte.png" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Jeu de carte</h4>
          <p class="card-text">Réalisation d'un jeu de carte en Javascript. Vous pouvez le tester en cliquant sur le bouton ci dessous.</p>
          <a href="http://www.mickael-lalanne.fr/TripleTriade" class="btn btn-primary">mickael-lalanne.fr/TripleTriade</a>
          <p class="card-text"><small class="text-muted">2017</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="img/siteMiw.png" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Refonte Site MIW</h4>
          <p class="card-text">Refonte du site de la licence MIW avec le CMS Wordpress. Travail sur les parties sécurité et intégration d'un flux Facebook.
          Retrouver le site en cliquant sur le bouton ci dessous.</p>
          <p class="card-text"><small class="text-muted">2017</small></p>
        </div>
      </div>
    </div>

    <div class="card-deck">
      <div class="card cardInvisible">
      </div>
      <div class="card ">
        <img class="card-img-top" src="img/cagt.png" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Extranet Elus</h4>
          <p class="card-text">Stage de 1ère et 2ème année du BTS SIO :
          Communauté d’Agglomérations du Grand Tarbes.
          <br>- Réalisation d’un site extranet pour les élus/secrétaires ayant pour objectif la dématérialisation des documents.
          <br>- Rendre le site accessible sur tablette, codage d’une partie administration, agenda partagé, envoie de mails, documentation.
          de mails</p>
          <p class="card-text"><small class="text-muted">2016 / 2017</small></p>
        </div>
      </div>
      <div class="card cardInvisible">
      </div>
    </div>


  </div>


    <!-- CONTACT -->
    <section id="contact" class="content-section text-center">
      <div class="contact-section">
          <div class="container">
            <h2>Contact</h2>
            <p>Information, question, projet, n'hésitez pas à prendre contact avec moi !</p>
            <?php if (isset($_POST['nom'])) {
              if ($envoi) {
                echo '<p style="color:#a8af77">Votre message a bien été envoyé.</p>';
              }
              else {
                echo '<p style="color:#ffab67">Votre message n\'a pas été envoyé. Merci bien vouloir renseigner tous les champs.</p>';
              }
            } ?>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-lg-12">
                <form action="index.php#contact" method="post" class="form-horizontal">
                  <div class="form-group">
                    <label for="exampleInputName2">Nom</label>
                    <input type="text" name="nom" class="form-control" id="exampleInputName2" placeholder="Bruce Wayne">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail2">Email</label>
                    <input type="email" name="mail" class="form-control" id="exampleInputEmail2" placeholder="batmail@gmail.com">
                  </div>
                  <div class="form-group ">
                    <label>Votre Message</label>
                    <textarea name="message" class="form-control" placeholder="I'm Batman"></textarea>
                  </div>
                  <button type="submit" class="btn btn-default">Envoyer</button>
                </form>
              </div>
            </div>
          </div>
      </div>
    </section>

    <!-- FOOTER -->
    <div class="container-fluid footer">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-lg-12">
          <p>2017 © Mickaël Lalanne - <a href="https://www.freepik.com/free-vector/vintage-retro-wolf-logo-collection_1165828.htm">Wolf Logo Designed by Freepik</a></p>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script>

    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
    });
    </script>
  </body>
</html>
