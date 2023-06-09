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

.competence-card{
  height: 320px;
}
.list-with-image {
  display: flex;
}

.image-right {
  max-width: 302px; /* Ajustez la largeur maximale selon vos besoins */
  height: 151px;
  margin-left: auto;
}

.image-left {
  max-width: 239px; /* Ajustez la largeur maximale selon vos besoins */
  height: auto;
  margin-left: auto;
  margin-bottom: auto;
}

/* CSS for small screens */
@media (max-width: 1300px) {

  .hover:hover {

scale: 1.1;
}
  .card-content {
    overflow-x: auto; /* Enable horizontal scrolling if needed */
    white-space: nowrap; /* Prevent line breaks */
  }

  .list-with-image {
    display: flex; /* Display the list items horizontally */
    flex-wrap: nowrap; /* Prevent line breaks */
    justify-content: flex-start; /* Align items to the left */
  }

  .list-with-image img {
    margin: 0 10px; /* Add some spacing between the list items */
  }
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
            
            <a href="https://www.linkedin.com/in/aimeric-vermesse/" target="_blank" style="text-decoration: none;">
              <i class="<bi bi-linkedin"></i> Linkedin
            </a>
        </h4>
          <nav class="navbar">
            <div class="navbar-menu">
              <div class="navbar-end">
                <a class="navbar-item" href="#about">À propos</a>
                <a id="projets-btn" class="navbar-item" href="#projects">Projets</a>
                <a class="navbar-item" href="#competences">Compétences</a>
                <a class="navbar-item" href="#education">Formation</a>
                <a class="navbar-item" href="#experiences">Expériences Professionnelles</a>
                <a class="navbar-item" href="#tableau">Tableau de synthèse</a>
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
      <h5>      <p>Je m'appelle Aimeric Vermesse, j'ai 19 ans et je suis en deuxième année de BTS SIO (Services Informatiques aux Organisations) avec une spécialisation en option SLAM (Solutions Logicielles et Applications Métier) au lycée Fénelon Notre-Dame. Passionné par le monde de l'informatique, j'ai choisi cette filière pour développer mes compétences en programmation et acquérir des connaissances pratiques dans le domaine des solutions logicielles et des applications métier. En dehors de mes études, j'ai plusieurs centres d'intérêts tel que le football et la musculation.</p>
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
                <h3 class="title is-4">Lycée Fénelon Notre-Dame </h3>
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
        <img src="internship.png" alt="Icone de stage" class="bi">
      </span>
      Expériences professionnelles
    </h2>

    <div class="columns">
      <div class="column">
        <div class="card">
          <div class="card-content">
            <h3 class="title is-4">Stage dans le service informatique de l'entreprise Duffau</h3>
            <p class="subtitle is-6">23/05/2023 - 24/06/2023</p>
            <p><a href="https://www.duffau.eu/">https://www.duffau.eu/</a></p>
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
            <p><a href="https://soludevi.fr/">https://soludevi.fr/</a></p>
            <ul>
              <li></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <section id="competences" class="section">
      <div class="container">
      <h2 class="title is-3">
  <span class="icon is-large">
    <img src="competences.png">
  </span>
  Compétences
</h2>

        <div class="columns">
          <div class="column">
            <div class="card competence-card">
              <div class="card-content">
              <h3 class="title is-4">Languages de programmation</h3>
              

                 <div class="list-with-image">
                <ul>
                  <li>HTML</li>
                  <li>CSS</li>
                  <li>Javascrpit</li>
                  <li>SQL</li>
                  <li>PHP</li>
                  <li>Python</li>
                  <li>C#</li>
                  <li>Java</li>
                </ul>

          <img src="langages.png" alt="Description de l'image" class="image-right"/>
        </div>
                
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card competence-card">
              <div class="card-content">
                <h3 class="title is-4">Outils de programmation</h3>
                <div class="list-with-image">
                <ul>
                  <li>Github</li>
                  <li>WinSCP / FileZilla</li>
                  <li>Symfony</li>
                  <li>WSL</li>
                  <li>Linux</li>
                  <li>Visual Studio Code / Notepad++</li>
                  <li>Bootstrap / Bulma / Tailwind</li>
                  <li>WordPress</li>
                  <li>MySQL / MongoDB / SQLite</li>
                </ul>

                <img src="tools.png" alt="Description de l'image" class="image-left"/>
                </div>
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
        <p></p>
        <p>Gérer le patrimoine informatique</p>
        <p>Travailler en mode projet</p>
        <p></p>
        <p>Demandes de traitement</p>
        <img src='traitements.PNG'></img>
        <p>Élaboration d'un MCD pour concevoir la structure de la base de données</p>
        <img src='mcd.PNG'></img>
        <p>Mise en place de la base de données</p>
        <img src='bdd.PNG'></img>
        <p>Utilisation de Github pour travailler en équipe avec mon camarade de classe</p>
        <img src='github.PNG'></img>

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
        <h1 class="modal-title" id="project2ModalLabel">Formulaire pour LeBonDebarrasseur</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Création d'un formulaire permettant de créer automatiquement des pages de présentation d'entreprise</h5>
        <p>Développer la présence en ligne de l’organisation</p>
        <img src='lebondebarrasseur.fr_debarras-charente-maritime-17_ (1).png'></img>
        <p>Rendu de la page</p>
        <img src='Capture.PNG'></img>
        <p>Formulaire</p>
        <img src='Capture2.PNG'></img>
        <p>Code permettant de récupérer les données et de créer la page avec</p>
        <img src='form1.PNG'></img>
        <img src='form2.PNG'></img>
        <img src='form3.PNG'></img>
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
      <p>Répondre aux incidents et aux demandes d’assistance et d’évolution</p>
      <p>Mettre à disposition des utilisateurs un service informatique</p>
      <img src='ACCENT.PNG'></img>
        <p>Le script permettant de d'enlever les caractères spéciaux et 0 non significatifs</p>
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
        <p>Gérer le patrimoine informatique</p>
        <p>Répondre aux incidents et aux demandes d’assistance et d’évolution</p>
        <p>Les anciens mot de passe étaient souvent très faibles (prénom/nom dans le mot de passe, numéro de département, pas de caractère spécial)</p>
        <p>Alors pour des raisons de sécurité l'entreprise à décidé de renforcer la politique de mot de passe (12 caractères minimum, majuscule, minuscule, chiffres, caractère spéciaux)</p>
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
        <h1 class="modal-title" id="project5ModalLabel">Mise en place d'une veille technologique</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Organiser son développement professionnel</p>
      <p></p>
        <h5>Google Alerts</h5>  
        <p></p>    
        <img src='veille.PNG'></img>
        <p></p>
        <h5>Instant Hack</h5>
        <p></p>
        <img src='veille2.PNG'></img>
        <img src='veille3.PNG'></img>
        <p></p>
        <h5>Je regarde et suis également des influenceurs spécialisés dans l’informatique comme :</h5>
        <h5>Youtube</h5>
        <p>- Micode</p>
        <p>- Grafikart</p>
        <p>- Benjamin Code</p>
        <h5>Twitter</h5>
        <p>- @TechCrunch</p>
        <p>- @arstechnica</p>
        <p>- @techreview</p>
        <h5>TikTok :</h5>
        <p>- @TechCrunch</p>
        <p>- @techtalktiktok</p>
        <p>- @alantradingyt</p>


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
            <img src="form.png" alt="[nom du projet]" data-bs-toggle="modal" data-bs-target="#project2Modal">            </figure>
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
            <img src="veille4.jpg" alt="[nom du projet]" data-bs-toggle="modal" data-bs-target="#project5Modal">            </figure>
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
<center><section id="tableau" class="section"><object data="tableau_synthese – Aimeric_Vermesse.pdf" type="application/pdf" width="50%" height="1000">
  <p>Alternative text - include a link <a href="tableau_synthese – Aimeric_Vermesse.pdf">to the PDF!</a></p>
</object></section></center>
</section>
