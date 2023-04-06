<!DOCTYPE html>
<html>
  <head>
    <title>Portfolio de [votre nom]</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/js/bulma.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

  </head>
  <body>
    <section class="hero is-primary">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">Portfolio de Aimeric Vermesse</h1>
          <nav class="navbar">
            <div class="navbar-menu">
              <div class="navbar-end">
                <a class="navbar-item" href="#about">À propos</a>
                <a class="navbar-item" href="#projects">Projets</a>
                <a class="navbar-item" href="#skills">Compétences</a>
                <a class="navbar-item" href="#education">Formation</a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </section>

    <section id="about" class="section">
      <div class="container">
        <h2 class="title">À propos de moi</h2>
        <div class="content">
          <p>blabla</p>
        </div>
      </div>
    </section>

    <section id="education" class="section">
      <div class="container">
        <h2 class="title">Formation</h2>
        <div class="columns">
          <div class="column">
            <div class="card">
              <div class="card-content">
                <h3 class="title is-4">Lycée</h3>
                <p class="subtitle is-6">Années scolaires</p>
                <ul>
                  <li></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <div class="card-content">
                <h3 class="title is-4">Stage 1 </h3>
                <p class="subtitle is-6">Durée:</p>
                <ul>
                  <li></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <div class="card-content">
                <h3 class="title is-4">Stage 2 </h3>
                <p class="subtitle is-6">Durée</p>
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
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="project1ModalLabel">Nom du projet 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Description du projet 1</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="project2Modal" tabindex="-1" aria-labelledby="project2ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="project2ModalLabel">Nom du projet 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Description du projet 2</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="project3Modal" tabindex="-1" aria-labelledby="project3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="project3ModalLabel">Nom du projet 3</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Description du projet 3</p>
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
        <div class="card" style="display:none;">
          <div class="card-image">
            <figure class="image is-4by3">
            <img src="img.jpg" alt="[nom du projet]" data-bs-toggle="modal" data-bs-target="#project1Modal">            </figure>
          </div>
          <div class="card-content">
            <h3 class="title is-4">Nom du projet 1</h3>
            <p>Description du projet 1</p>

          </div>
        </div>
      </div>
      <div class="column is-one-third">
        <div class="card" style="display:none;">
          <div class="card-image">
            <figure class="image is-4by3">
            <img src="img.jpg" alt="[nom du projet]" data-bs-toggle="modal" data-bs-target="#project2Modal">            </figure>
          </div>
          <div class="card-content">
            <h3 class="title is-4">Nom du projet 1</h3>
            <p>Description du projet 1</p>

          </div>
        </div>
      </div>
      <div class="column is-one-third">
        <div class="card" style="display:none;">
          <div class="card-image">
            <figure class="image is-4by3">
            <img src="img.jpg" alt="[nom du projet]" data-bs-toggle="modal" data-bs-target="#project3Modal">            </figure>
          </div>
          <div class="card-content">
            <h3 class="title is-4">Nom du projet 3</h3>
            <p>Description du projet 3</p>

          </div>
      <!-- Ajoutez d'autres éléments de projet ici -->
    </div>
  </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $('.card').each(function(i) {
      $(this).delay(150 * i).fadeIn();
    });
  });
</script>
</section>