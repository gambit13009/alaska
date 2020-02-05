<?php
class ControllerAdmin {
  // vue pour l'administrateur
  public function adminView() {
    require 'model/User.php';
    require 'view/admin.php';
  }
  // vue pour la page d'accueil    
  public function homeView() {
    require 'model/Post.php';
    $lastposts = new Post();
    $post = $lastposts->getLastPosts();
    require 'view/accueil.php';
  }
  // vue pour le  mot de passe oublié    
  public function pswdlostView() {
    require 'view/passwordlost.php';
  }
  // vue pour changer de mot de passe    
  public function changepswdView() {
    require 'view/changepassword.php';
  }
  // fonction pour mettre à jour un article    
  public function updatePost() {
    require 'model/User.php';
    require 'model/Post.php';
    $update = new Post();
    $post = $update->updatePost();
    require 'view/admin.php';
  }
  // fonction pour afficher un article    
  public function getPost() {
    require 'model/User.php';
    require 'model/Post.php';
    $update = new Post();
    $post = $update->getPost();
    require 'view/updatepost.php';
  }
  // fonction pour mettre à jour les articles    
  public function updateList() {
    require 'model/User.php';
    require 'model/Post.php';
    $updatelist = new Post();
    $post = $updatelist->listPost();
    require 'view/updatescreen.php';
  }
  // fonction pour créer un article    
  public function createList() {
       require 'view/createpost.php';
  }
  // fonction pour créer un article    
  public function createPost() {
    require 'model/User.php';
    require 'model/Post.php';
    $create = new Post();
    $postCr = $create->createPost();
    $post = $create->getLastPosts();
    require 'view/admin.php';
  }
  // fonction pour effacer un article de la liste     
  public function deleteList() {
    require 'model/User.php';
    require 'model/Post.php';
    $deletelist = new Post();
    $post = $deletelist->listPost();
    require 'view/deletescreen.php';
  }
  // fonction pour effacer un article    
  public function deletePost() {
    require 'model/User.php';
    require 'model/Post.php';
    $deletepost = new Post();
    $post = $deletepost->deletePost();
  }
  // fonction pour effacer un commentaire signalé
  public function deleteCommentary() {
    require 'model/Commentary.php';
    $deletecommentary = new Commentary();
    $commentary = $deletecommentary->deleteCommentary();
  }
  // fonction pour valider un commentaire signalé    
  public function validateCommentary() {
    require 'model/Commentary.php';
    $validatecommentary = new Commentary();
    $commentary = $validatecommentary->validateCommentary();
  }
  // fonction pour afficher les commentaires signalés    
  public function listReported() {
    require 'model/Commentary.php';
    require 'model/Post.php';
    $listcomment = new Commentary();
    $commentary = $listcomment->listReportedCommentary();
    require 'view/reportedlist.php';
  }
  // si le mot de passe est perdu : creation d'un nouveau + mise à jour de la BDD
  public function generateTempPwd($mailtoAddress) {
      require_once 'model/User.php';
      $randomInt = rand(1000000, 999999999);
      $tempPwd = hash('md5', $randomInt);
      $user = new User();
      $forterocheMail = $user->getForterocheMail();
      if ($forterocheMail = $mailtoAddress) {
          $user->updateTempPwd($tempPwd, $forterocheMail);
          return $randomInt;
      } else {
            $_SESSION['info'] = 'Votre adresse est inconnue dans la base.<br>
            Cliquez pour revenir à la <a href="index.php?action=login">page de connexion</a>';
      }
  }
  // fonction pour modifier le mot de passe
  public function updatePwd($oldPwd,$newPwd,$newPwdConfirm) {
      require 'model/User.php';
      $user = new User(); 
      $forterochePwd = $user->getForterochePwd(); 
      $forterocheMail = $user->getForterocheMail();
      if ($forterochePwd[0] == hash('md5', $oldPwd)) { 
        if ($newPwd != $newPwdConfirm) { 
            $_SESSION['info'] = 'Merci de rentrer deux fois le même mot de passe<br><a href="index.php?action=changepswdform">Réessayer</a><br>'; 
            header('Location: index.php');
        } else { 
            $hashedPwd = hash('md5', $newPwd); 
            $user->updatePwd($hashedPwd, $forterocheMail);  
        } 
      } else { 
      $_SESSION['info'] = 'Vous n\'avez pas renseigné le bon mot de passe<br><a href="index.php?action=changepswdform">Réessayer</a><br>'; 
          header('Location: index.php');
      } 
  }
}
