<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <?php
    $title = "Liste des articles";
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
      <section class="container paddingtop">
        <?php while($p = $post->fetch()) { ?>
          <div class="card marginlist">
            <img class="card-img-top" src="images/alaska.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?= $p['title'] ?></h5>
            <?php
            if (strlen($p['message']) > 99) { ?>
              <p class="card-text"><p><?= $p['message'] = mb_substr($p['message'], 0, strpos($p['message'], ' ', 100));?>...</p>
                <a class="btn btn-primary" href="index.php?action=article&id=<?= $p['id'] ?>">Lire l'article</a>
            <?php
            } 
            else { ?>
              <p class="card-text"><p><?= $p['message']?></p>
                <a class="btn btn-primary" href="index.php?action=article&id=<?= $p['id'] ?>">Lire l'article</a>
            <?php
            }
            ?>
          </div>
        </div>
        <?php } ?>
      </section>
      <?php require'footer.php'; ?>
    </body>
</html>