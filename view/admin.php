<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <?php
        $title = "Centre d'administration";
        require'head.php';
      ?>
  <body>
    <?php
      if (isset($_SESSION['alias'])) {
        if ($_SESSION['admin'] == 1) {
          require'adminheader.php';
        }
        else{
          require'logedheader.php';
        }
      }
      else {
        require'header.php';
      }
    ?>
    <section class="container paddingtop">
      <h1 class="titlestyle">Centre d'administration</h1>
      <div class="card text-center titlestyle">
        <div class="card-body">
          <h5 class="card-title">Créer un article</h5>
          <p class="card-text">Créer un nouvel article</p>
          <a href="?action=createpost" class="btn btn-primary">Aller ici</a>
        </div>
      </div>
      <div class="card text-center titlestyle">
        <div class="card-body">
          <h5 class="card-title">Modifier un article</h5>
          <p class="card-text">Modifier un article existant</p>
          <a href="?action=update" class="btn btn-primary">Aller ici</a>
        </div>
      </div>
      <div class="card text-center titlestyle">
        <div class="card-body">
          <h5 class="card-title">Supprimer un article</h5>
          <p class="card-text">Sélectionner un article à supprimer</p>
          <a href="?action=delete" class="btn btn-primary">Aller ici</a>
        </div>
      </div>
      <div class="card text-center titlestyle">
        <div class="card-body">
          <h5 class="card-title">Voir les commentaires signalés</h5>
          <p class="card-text">Modérer les commentaires</p>
          <a href="?action=moderate" class="btn btn-primary">Aller ici</a>
        </div>
      </div>
    </section>
    <?php require'footer.php'; ?>
  </body>
</html>