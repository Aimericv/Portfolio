<!DOCTYPE html>
<html>
  <head>
    <title>Portfolio de Vermesse Aimeric</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/js/bulma.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <style>.hover:hover {

  scale: 1.1;
}

.custom-card-height {
  height: 520px;
}



</style>
  </head>
  <body>
    <section class="hero is-primary">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">Portfolio de Aimeric Vermesse</h1>
          <h4>
            <a href="https://github.com/Aimericv" target="_blank" style="text-decoration: none;">
              <i class="bi bi-github"></i> Github
            </a>
        
            <a href="https://github.com/Aimericv" target="_blank" style="text-decoration: none;">
              <i class="bi bi-github"></i> Linkedin
            </a>
        </h4>
          <nav class="navbar">
            <div class="navbar-menu">
              <div class="navbar-end">
                <a class="navbar-item" href="#about">À propos</a>
                <a id="projets-btn" class="navbar-item" href="#projects">Projets</a>
                <a class="navbar-item" href="#skills">Compétences</a>
                <a class="navbar-item" href="#education">Formation</a>
                <a class="navbar-item" href="#experiences">Expériences Professionnelles</a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </section>

    <section id="about" class="section">
  <div class="container">
    <h2 class="title"><i class="bi bi-person-circle"></i> À propos de moi</h2>
    <div class="content">
      <h5>      <p>Je m'appelle Aimeric Vermesse, j'ai 19 ans et je suis en deuxième année  de BTS SIO option SLAM (Solutions Logicielles et Application Métier) au lycée Fénelon-notredame.</p>
</h5>
    </div>
  </div>
</section>


    <section id="education" class="section">
      <div class="container">
        <h2 class="title"><i class="bi bi-book"></i> Formation</h2>
        <div class="columns">
          <div class="column">
            <div class="card">
              <div class="card-content">
                <h3 class="title is-4">Lycée Pons Emile Combes</h3>
                <p class="subtitle is-6">2018-2021</p>
                <p class="subtitle is-6">Baccalauréat STI2D ITEC</p>
            
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <div class="card-content">
                <h3 class="title is-4">Lycée Fénelon-notredame </h3>
                <p class="subtitle is-6">2021-2023</p>
                <p class="subtitle is-6">BTS SIO SLAM</p>
                <ul>
                  <li></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="experiences" class="section">
      <div class="container">
      <h2 class="title is-3">
  <span class="icon is-large">
    <img src="internship.png" alt="Internship icon" class="bi">
  </span>
  Expériences professionnelles
</h2>

        <div class="columns">
          <div class="column">
            <div class="card">
              <div class="card-content">
                <h3 class="title is-4">Stage dans le service informatique de l'entreprise Duffau</h3>
                <p class="subtitle is-6">23/05/2023 - 24/06/2023</p>
                <ul>
                  <li></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <div class="card-content">
                <h3 class="title is-4">Stage en tant que développeur web dans l'entreprise Soludevi</h3>
                <p class="subtitle is-6">02/01/2023 - 15/02/2023</p>
                <ul>
                  <li></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="projects" class="section">

    <div class="modal fade" id="project1Modal" tabindex="-1" aria-labelledby="project1ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="project1ModalLabel">Cybervote</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Dans le cadre de mon épreuve E5 j'ai réalisé un site de vote en ligne nommé CyberVote.</h5>
        <p>Authentification par carte de vote</p>
        <img src='carte_vote.PNG'></img>
        <p>Sélection de l'éléction pour laquelle on veut voter</p>
        <img src='election.PNG'></img>
        <p>Vote pour le candidat de notre choix</p>
        <img src='vote.PNG'></img>
        <p>Authentification avec code secret, nom, prénom, code postal, date de naissance</p>
        <img src='authentification.PNG'></img>
        <p>Accès à la page des rédultats</p>
        <img src='resultat.PNG'></img>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="project2Modal" tabindex="-1" aria-labelledby="project2ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="project2ModalLabel">Nom du projet 2</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Description du projet 2</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="project3Modal" tabindex="-1" aria-labelledby="project3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="project3ModalLabel">Script Excel</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h5>Création d'un script VBA pour enlever les caractères spéciaux et 0 non significatifs pour faciliter le travail des employés</h5>
      <img src='tab.PNG'></img>
        <p></p>
        <img src='vba.PNG'></img>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="project4Modal" tabindex="-1" aria-labelledby="project4ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="project4ModalLabel">Modification mot de passe</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Modification des mots de passe des employés de l'entreprise Duffau pour respecter les normes de sécurité</h5>
        <img src='mdp.PNG'></img>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="project5Modal" tabindex="-1" aria-labelledby="project5ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="project5ModalLabel">dhtfh</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>ygfjuyguty</h5>      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

  <div class="container">
    <h2 class="title">Mes projets</h2>
    <div class="columns is-multiline">
      <div class="column is-one-third">
      <div class="hover">
        <div class="card" style="display:none; ">
        <div class="card-content custom-card-height">

          <div class="card-image">
            <figure class="image is-4by3">
            <img src="Cybervote.jpg" alt="[nom du projet]" data-bs-toggle="modal" data-bs-target="#project1Modal">            </figure>
          </div>
          <div class="card-content">
            <h3 class="title is-4">Cybervote</h3>
            <p>Site permettant de voter à des éléctions en ligne</p>


          </div>
        </div>
        </div>
      </div>
      </div>
      <div class="column is-one-third">
      <div class="hover">

        <div class="card" style="display:none;">
        <div class="card-content custom-card-height">

          <div class="card-image">
            <figure class="image is-4by3">
            <img src="img.jpg" alt="[nom du projet]" data-bs-toggle="modal" data-bs-target="#project2Modal">            </figure>
          </div>
          <div class="card-content">
            <h3 class="title is-4">Formulaire LeBonDebarasseur</h3>
            <p>Formulaire facilitant l'insertion de nouvelles entreprises dans le site</p>

          </div>
        </div>
        </div>
      </div>
      </div>
      <div class="column is-one-third">
      <div class="hover">
        <div class="card" style="display:none;">
        <div class="card-content custom-card-height">


          <div class="card-image">
            <figure class="image is-4by3">
            <img src="excel.jpg" alt="[nom du projet]" data-bs-toggle="modal" data-bs-target="#project3Modal">            </figure>
          </div>
          <div class="card-content">
            <h3 class="title is-4">Script Excel</h3>
            <p>Création d'un script VBA pour enlever les caractères spéciaux et 0 non significatifs pour faciliter le travail des employés</p>

          </div>
        </div>
      <!-- Ajoutez d'autres éléments de projet ici -->
    </div>
  </div>
  
</div>
<div class="column is-one-third">
      <div class="hover">
        <div class="card" style="display:none;">
        <div class="card-content custom-card-height">


          <div class="card-image">
            <figure class="image is-4by3">
            <img src="securite-mdp.png" alt="[nom du projet]" data-bs-toggle="modal" data-bs-target="#project4Modal">            </figure>
          </div>
          <div class="card-content">
            <h3 class="title is-4">Modification mots de passe</h3>
            <p>Modification des mots de passes des employés de l'entreprise Duffau pour réspecter la norme de sécurité</p>

          </div>
        </div>
        </div>
      </div>
    </div>
    <div class="column is-one-third">
      <div class="hover">
        <div class="card" style="display:none;">
        <div class="card-content custom-card-height">


          <div class="card-image">
            <figure class="image is-4by3">
            <img src="img.jpg" alt="[nom du projet]" data-bs-toggle="modal" data-bs-target="#project5Modal">            </figure>
          </div>
          <div class="card-content">
            <h3 class="title is-4">Mise en place d'une veille technologique</h3>
            <p>Mise en place d'une veille technologique afin d'être à jour concernant les nouvelles informations liées à l'informatque</p>
            
          </div>
        </div>
  </div>
  
</div> 
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

$(document).ready(function() {
    $('.card').each(function(i) {
      $(this).delay(1 * i).fadeIn();
    });
  });
  


</script>
<center><object data="tableau_synthese.pdf" type="application/pdf" width="50%" height="1000">
  <p>Alternative text - include a link <a href="tableau_synthese.pdf">to the PDF!</a></p>
</object></center>
</section>
