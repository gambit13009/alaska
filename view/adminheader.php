<header class="navbarfixed">
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Billet simple pour l'Alaska</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=articles">Articles<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=bio">Jean Forteroche<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=admin">Centre d'administration<span class="sr-only"></span></a>
        </li>
      </ul>
    </div>
 <!--Gestion des messages d'erreur -->
 <?php if (isset($_SESSION['info']) && $_SESSION['info'] != null)  {
     ?>
     <div class='alert-info msginf'><?php echo $_SESSION['info']; ?></div>
     <?php $_SESSION['info'] = null;
 } else {
     ?>
     <div class='alert-info msginf'></div>
     <?php
 }
 ?>
    <!--Deconnexion-->
    <form method="post" action="index.php?action=logout">
      <input type="submit" class="btn btn-outline-danger marginheader" name="buttonLogout" value="Déconnexion"></input>
    </form>
  </nav>
</header>