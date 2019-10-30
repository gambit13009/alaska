<?php
  session_start();
  
  require'controller/ControllerHome.php';
  require'controller/ControllerAdmin.php';
  
  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'articles') {
      $controller = new ControllerHome();
      $controller->listArticles();
    }
    elseif ($_GET['action'] == 'login') {
      $controller = new ControllerHome();
      $controller->login();
    }
    elseif ($_GET['action'] == 'comment') {
      if (isset($_GET['id']) && $_GET['id'] > 0) {
        $controller = new ControllerHome();
        $controller->createcomment();
      }
      else {
        $_SESSION['info'] = "Erreur : aucune page trouvée";
        $controller = new ControllerHome();
        $controller->homeView();
      }
    }
    elseif ($_GET['action'] == 'createpost') {
      $controller = new ControllerAdmin();
      $controller->createPost();
    }
    elseif ($_GET['action'] == 'delete') {
      $controller = new ControllerAdmin();
      $controller->deleteList();
    }
    elseif ($_GET['action'] == 'deletepost') {
      if (isset($_GET['id']) && $_GET['id'] > 0) {
      $controller = new ControllerAdmin();
      $controller->deletePost();
      }
      else {
        $_SESSION['info'] = "Erreur : aucune page trouvée";
        $controller = new ControllerHome();
        $controller->homeView();
      }
    }
    elseif ($_GET['action'] == 'update') {
      $controller = new ControllerAdmin();
      $controller->updateList();
    }
    elseif ($_GET['action'] == 'updatepost') {
      if (isset($_GET['id']) && $_GET['id'] > 0) {
      $controller = new ControllerAdmin();
      $controller->updatePost();
      }
      else {
        $_SESSION['info'] = "Erreur : aucune page trouvée";
        $controller = new ControllerHome();
        $controller->homeView();
      }
    }
    elseif ($_GET['action'] == 'report') {
      if (isset($_GET['id']) && $_GET['id'] > 0) {
      $controller = new ControllerHome();
      $controller->reportCommentary();
      }
      else {
        $_SESSION['info'] = "Erreur : aucune page trouvée";
        $controller = new ControllerHome();
        $controller->homeView();
      }
    }
    elseif ($_GET['action'] == 'admin') {
      if (isset($_SESSION['admin'])) {
        if ($_SESSION['admin'] == 'ok') {
          $controller = new ControllerAdmin();
          $controller->adminView();
        } else {
          $_SESSION['info'] = "Vous n'êtes pas administrateur";
          $controller = new ControllerHome();
          $controller->homeView();
        }
      } else {
        $_SESSION['info'] = "Vous n'êtes pas administrateur";
        $controller = new ControllerHome();
        $controller->homeView(); 
      }
    }
    elseif ($_GET['action'] == 'bio') {
      $controller = new ControllerHome();
      $controller->bioView();
    }
    elseif ($_GET['action'] == 'article') {
      if (isset($_GET['id']) && $_GET['id'] > 0) {
        $controller = new ControllerHome();
        $controller->getPost();
      }
      else {
        $_SESSION['info'] = "Erreur : aucune page trouvée";
        $controller = new ControllerHome();
        $controller->homeView();
      }
    }
    elseif ($_GET['action'] == 'logout') {
      $controller = new ControllerHome();
      $controller->logout();
    }
    elseif ($_GET['action'] == 'moderate') {
      $controller = new ControllerAdmin();
      $controller->listReported();
    }
    elseif ($_GET['action'] == 'validatecommentary') {
      if (isset($_GET['id']) && $_GET['id'] > 0) {
        $controller = new ControllerAdmin();
        $controller->validateCommentary();
      }
      else {
        $_SESSION['info'] = "Erreur : aucune page trouvée";
        $controller = new ControllerHome();
        $controller->homeView();
      }
    }
    elseif ($_GET['action'] == 'deletecommentary') {
      if (isset($_GET['id']) && $_GET['id'] > 0) {
        $controller = new ControllerAdmin();
        $controller->deleteCommentary();
      }
      else {
        $_SESSION['info'] = "Erreur : aucune page trouvée";
        $controller = new ControllerHome();
        $controller->homeView();
      }
    }
  }
  else {
    $controller = new ControllerHome();
    $controller->homeView();
    $_SESSION['info'] = "";
  }
?>

