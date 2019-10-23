<!DOCTYPE html>
<html lang="fr" dir="ltr">
<?php
  $title = "Création d'articles";
  require'head.php';
?>
  <body>
    <?php
      if ($_SESSION['admin'] = 'pok') {
           require 'header.php';
        }
        else {
          require 'adminheader.php';
      }
    ?>
    <section class="container paddingtop">
      <h1 class="titlestyle">Création d'article</h1>
      <form action="" method="post">
        <div class="form-group">
          <label for="title">Titre</label>
          <input type="text" class="form-control" name="title" placeholder="Titre">
        </div>
        <div class="form-group">
          <label for="postText">Texte</label>
          <textarea name="postText" class="tinymce"></textarea>
        </div>
        <input type="submit" class="btn btn-success" name="submit" value="Envoyer"></input>
      </form>
    </section>
    <?php require'footer.php'; ?>
  </body>
</html>