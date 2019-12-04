<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <?php
    $title = "Liste des commentaires signalés";
    require'head.php';
    ?>
    <body>
      <?php
         if (isset($_SESSION['admin'])) {
        if ($_SESSION['admin'] == 'ok') {
          require'adminheader.php';  
        } else {
          require'header.php';  
        }
      } else {
        require'header.php';
      }
      ?>
      <section class="container paddingtop signal">
        <h1>Liste des commentaires signalés</h1>
        <?php while($c = $commentary->fetch()) { ?>
        <div class="rows">
          <div class="card marginlist">
          <div class="card-body">
              <button class="color-button mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" data-upgraded=",MaterialButton,MaterialRipple">
                  <i class="material-icons">warning</i>
              </button>
                <h5 class="card-title"></h5>
                    <p class="card-text"><?= $c['comment_text'] ?></p>
                    <a class="btn btn-success" href="?action=validatecommentary&id=<?= $c['id'] ?>">Valider le Commentaire</a>
                    <a class="btn btn-danger" href="?action=deletecommentary&id=<?= $c['id'] ?>">Supprimer le Commentaire</a>
          </div>
        </div>
        <?php } ?>
      </section>
      <?php require'footer.php'; ?>
    </body>
</html>