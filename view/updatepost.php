<!DOCTYPE html>
<html lang="fr" dir="ltr">
<?php
  $title = "Modification d'article";
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
      <h1 class="titlestyle">Modification d'article</h1>
      <form action="index.php?action=updatepost&id=<?php echo $_GET['id']?>" method="post" >
        <div class="form-group">
          <label for="title">Titre</label>
            <input type="text" class="form-control" name="title" value="<?= $post['title']?>">
        </div>
        <div class="form-group">
          <label for="postText">Texte</label>
          <textarea name="postText" id="tinymce"><?= $post['message']?></textarea>
        </div>
        <input type="submit" class="btn btn-success" name="submit" value="Envoyer">
      </form>
    </section>
    <?php require'footer.php'; ?>
  </body>
</html>
