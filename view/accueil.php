<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <!--Head-->
  <?php
    $title = "Billet simple pour l'Alaska";
    require'head.php';
    ?>
  <!--Body-->
  <body class="sectionbackground">
    <!--Header-->
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
    <!--Episodes-->
    <section class="container sectionmargin row justify-content-around" id="episodes">
      <h1 class="articles container">Articles les plus récents</h1>  
      <?php while($p = $post->fetch()) { ?>
      <div class="card col-4">
        <img class="card-img-top" src="images/alaska.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?= $p['title'] ?></h5>
          <p class="card-text"><p><?= $p['message'] = mb_substr($p['message'], 0, strpos($p['message'], ' ', 100));?>...</p>
          <a class="btn btn-primary" href="?action=article&id=<?= $p['id'] ?>">Lire l'article</a>
        </div>
      </div>
        <?php } ?>  
        </section>
    <!--Biography-->
    <section class="sectionmargin container" id="bio">
      <div class="jumbotron">
        <h1 class="display-4">Jean Forteroche</h1>
        <p class="lead">Auteur et écrivain Canadien contemporain de romans et de nouvelles à succès.</p>
        <hr class="my-4">
        <p>Sed vitae venenatis metus, in condimentum nisi. Etiam finibus tortor sit amet lacus hendrerit commodo. Donec finibus accumsan rhoncus. Nulla maximus gravida lectus vitae imperdiet. Suspendisse aliquet metus ullamcorper, suscipit justo ut, malesuada neque. Aenean vitae sapien ipsum. Sed aliquet elementum tempus.</p>
        <a class="btn btn-primary btn-lg" href="?action=bio" role="button">Lire la suite</a>
      </div>
    </section>
     <!--Footer-->
    <?php require'footer.php' ?>
  </body>
</html>