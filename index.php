<?php
  
  if (!isset($_SESSION['session_ok'])) {
    session_start();
    $_SESSION['session_ok'] = 'ok';
    $_SESSION['admin'] = false;
  } 
  
  require'controller/ControllerHome.php';
  require'controller/ControllerAdmin.php';
  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'episodes') {
      $controller = new ControllerHome();
      var_dump('---1---');
      $controller->listEpisodes();
    }
    elseif ($_GET['action'] == 'login') {
      var_dump('---2---');
      $controller = new ControllerHome();
      $controller->login();
    }
    elseif ($_GET['action'] == 'signin') {
      var_dump('---3---');
      $controller = new ControllerHome();
      $controller->signuser();
    }
    elseif ($_GET['action'] == 'comment') {
      var_dump('---4---');
      if (isset($_GET['id']) && $_GET['id'] > 0) {
        $controller = new ControllerHome();
        $controller->createcomment();
      }
      else {
        echo 'Erreur : aucune page trouvée';
      }
    }
    elseif ($_GET['action'] == 'createpost') {
      var_dump('---5---');
      $controller = new ControllerAdmin();
      $controller->createPost();
    }
    elseif ($_GET['action'] == 'delete') {
      var_dump('---6---');
      $controller = new ControllerAdmin();
      $controller->deleteList();
    }
    elseif ($_GET['action'] == 'deletepost') {
      var_dump('---7---');
      if (isset($_GET['id']) && $_GET['id'] > 0) {
      $controller = new ControllerAdmin();
      $controller->deletePost();
      }
      else {
        echo 'Erreur : Aucune page trouvée';
      }
    }
    elseif ($_GET['action'] == 'update') {
      var_dump('---8---');
      $controller = new ControllerAdmin();
      $controller->updateList();
    }
    elseif ($_GET['action'] == 'updatepost') {
      var_dump('---9---');
      if (isset($_GET['id']) && $_GET['id'] > 0) {
      $controller = new ControllerAdmin();
      $controller->updatePost();
      }
      else {
        echo 'Erreur : aucune page trouvée';
      }
    }
    elseif ($_GET['action'] == 'report') {
      var_dump('---10---');
      if (isset($_GET['id']) && $_GET['id'] > 0) {
      $controller = new ControllerHome();
      $controller->reportCommentary();
      }
      else {
        echo 'Erreur : aucune page trouvée';
      }
    }
    elseif ($_GET['action'] == 'admin') {
      var_dump($_SESSION['admin']);
      var_dump('---11---');
      if ($_SESSION['admin'] = true) {
        $controller = new ControllerAdmin();
        $controller->adminView();
      }
      else {
        echo "Vous n'êtes pas administrateur";
      }
    }
    elseif ($_GET['action'] == 'bio') {
      var_dump('---12---');
      $controller = new ControllerHome();
      $controller->bioView();
    }
    elseif ($_GET['action'] == 'article') {
      var_dump('---13---');
      if (isset($_GET['id']) && $_GET['id'] > 0) {
        $controller = new ControllerHome();
        $controller->getPost();
      }
      else {
        echo 'Erreur : aucune page trouvée';
      }
    }
    elseif ($_GET['action'] == 'logout') {
      var_dump('---14---');
      $controller = new ControllerHome();
      $controller->logout();
    }
    elseif ($_GET['action'] == 'moderate') {
      var_dump('---15---');
      $controller = new ControllerAdmin();
      $controller->listReported();
    }
    elseif ($_GET['action'] == 'validatecommentary') {
      var_dump('---16---');
      if (isset($_GET['id']) && $_GET['id'] > 0) {
        $controller = new ControllerAdmin();
        $controller->validateCommentary();
      }
      else {
        echo 'Erreur : aucune page trouvée';
      }
    }
    elseif ($_GET['action'] == 'deletecommentary') {
      var_dump('---17---');
      if (isset($_GET['id']) && $_GET['id'] > 0) {
        $controller = new ControllerAdmin();
        $controller->deleteCommentary();
      }
      else {
        echo 'Erreur : aucune page trouvée';
      }
    }
    elseif ($_GET['action'] == 'loged') {
      var_dump('---18---');
      if (isset($_GET['id']) && $_GET['id'] > 0) {
        $controller = new ControllerHome();
        $controller->homeView();
      }
      else {
        echo 'Erreur : aucune page trouvée';
      }
    }
  }
  else {
    $controller = new ControllerHome();
    $controller->homeView();
  }
?>