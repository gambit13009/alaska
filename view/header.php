<!--Header-->
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
          			<a class="nav-link" href="?action=episodes">Articles<span class="sr-only"></span></a>
        		</li>
        		<li class="nav-item">
          			<a class="nav-link" href="?action=bio">Jean Forteroche<span class="sr-only"></span></a>
        		</li>
      		</ul>
    	</div>
    
      <!--Connection-->
      <button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#login">Connexion</button>
      <div id="login" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header center">
              Veuillez entrer vos identifiants
            </div>
            <div class="modal-body">
              <form method="post" action="index.php?action=login">
                <div class="form-group">
                  <label>Mail</label>
                  <input type="text" class="form-control" name="mail" placeholder="Mail">
                </div>
                <div class="form-group">
                  <label>Mot de passe</label>
                  <input type="password" class="form-control" name="pass" placeholder="Mot de passe">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" name="button">Annuler</button>
                <input type="submit" class="btn btn-success" name="buttonLogin"></input>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>