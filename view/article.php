<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <?php
  $title = $post['title'];
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
      <!--Background-image-->
    <section class="herosection sectionmargin">
      <div class="hero">
        <div class="herocaption center">
          <img src="images/alaska.jpg" alt="Alaska image">
              <h1>Un billet simple pour l'Alaska</h1>
              <p>Un roman écrit par Jean Forteroche</p>
        </div>
      </div>
    </section>
      <section class="container paddingtop">
        <div>
          <h1><?=$post['title']?></h1>
          <p><?=$post['message']?></p>
        
          <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#comment">Ecrire un commentaire</button>
          <div id="comment" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header center">
                  Veuillez saisir votre commentaire
                </div>
                <div class="modal-body">
                  <form method="post" action="index.php?action=comment&id=<?php echo $post['id']?>&pseudo=$_POST['pseudo']&comment=$_POST['comment']">
                    <div class="form-group">
                      <label for="alias">Pseudo</label>
                      <input type="text" name="pseudo">
                      <label for="commentArea">Commentaire</label>
                      <textarea class="form-control" id="commentArea" name="comment" rows="3"></textarea>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal" name="button">Annuler</button>
                      <input type="submit" class="btn btn-success" name="buttonSign">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <?php 
        if ($commentary != null) {
          foreach (array($commentary) as $c) { ?>
          <div class="card">
            <div class="card-header">
              Rédigé par : <?=$c['alias_user'] ?>
            </div>
            <div class="card-body"> 
              <blockquote class="blockquote mb-0">
                <p>Commentaire : <?=$c['comment_text'] ?></p>
                <a href="index.php?action=report&id=<?= $c['id'] ?>" class="btn btn-danger">Signaler</a>
              </blockquote>
            </div>
          </div>
        <?php } 
           } else {
                echo ' ';
            } ?>
      </section>
      <?php require'footer.php' ?>
    </body>
</html>