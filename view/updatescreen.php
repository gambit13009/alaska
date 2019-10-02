<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <?php
    $title = "Liste des episodes";
    require'head.php';
    ?>
    <body>
      <?php
        if ($_SESSION['admin'] = false) {
           require 'index.php';
        }
        else {
          require 'adminheader.php';
        }
      ?>
      <section class="container paddingtop">
        <?php while($p = $post->fetch()) { ?>
        <div class="rows">
          <div class="card marginlist">
            <img class="card-img-top" src="images/alaska.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?= $p['title'] ?></h5>
            <p class="card-text"><?= $p['message'] = mb_substr($p['message'], 0, strpos($p['message'], ' ', 100));?></p>
            <a class="btn btn-warning" href="?action=updatepost&id=<?= $p['id'] ?>">Modifier l'article</a>
          </div>
        </div>
        <?php } ?>
      </section>
      <?php require'footer.php'; ?>
    </body>
</html>