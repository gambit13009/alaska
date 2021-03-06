<!DOCTYPE html>
<html lang="fr" dir="ltr">
<?php
  $title = "Création d'articles";
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
      <h1 class="titlestyle">Création d'article</h1>
      <form action="index.php?action=createpost" method="post" style="width: 100%">
        <div class="form-group">
          <label for="title">Titre</label>
          <input type="text" class="form-control" name="title" placeholder="Titre" style="width: 100%">
        </div>
        <div class="form-group">
          <label for="postText">Texte</label>
          <textarea name="postText" id="tinymce"></textarea>
        </div>
        <input type="submit" class="btn btn-success" name="submit" value="Envoyer">
      </form>
    </section>

    <?php require'footer.php'; ?>
  </body>
</html>