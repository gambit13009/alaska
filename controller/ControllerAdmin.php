<?php
class ControllerAdmin {
  public function adminView() {
    require 'model/User.php';
    require'view/admin.php';
  }
  public function pswdlostView() {
    require'view/passwordlost.php';
  }
  public function updatePost() {
    require 'model/User.php';
    require'model/Post.php';
    $update = new Post();
    $post = $update->getPost();
    require'view/updatepost.php';
    $post = $update->updatePost();
  }
  public function updateList() {
    require 'model/User.php';
    require'model/Post.php';
    $updatelist = new Post();
    $post = $updatelist->listPost();
    require'view/updatescreen.php';
  }
  public function createPost() {
    require 'model/User.php';
    require'model/Post.php';
    require'view/createpost.php';
    $create = new Post();
    $post = $create->createPost();
  }
  public function deleteList() {
    require 'model/User.php';
    require'model/Post.php';
    $deletelist = new Post();
    $post = $deletelist->listPost();
    require'view/deletescreen.php';
  }
  public function deletePost() {
    require 'model/User.php';
    require'model/Post.php';
    $deletepost = new Post();
    $post = $deletepost->deletePost();
  }
  public function deleteCommentary() {
    require'model/Commentary.php';
    $deletecommentary = new Commentary();
    $commentary = $deletecommentary->deleteCommentary();
  }
  public function validateCommentary() {
    require'model/Commentary.php';
    $validatecommentary = new Commentary();
    $commentary = $validatecommentary->validateCommentary();
  }
  public function listReported() {
    require'model/Commentary.php';
    require'model/Post.php';
    $listcomment = new Commentary();
    $commentary = $listcomment->listReportedCommentary();
    require'view/reportedlist.php';
  }
  // si le mot de passe est perdu : creation d'un nouveau + mise à jour de la base de données
  public function generateTempPwd($mailtoAddress) {
      require_once 'model/User.php';
      //$randomInt = rand(1000000, 999999999);
      $randomInt = "gambit13";
      $tempPwd = hash('md5', $randomInt);
      $user = new User();
      $forterocheMail = $user->getForterocheMail();
        if ($forterocheMail[0] == $mailtoAddress) {
            $user->updateTempPwd($tempPwd, $mailtoAddress);
            return $randomInt;
        } else {
            throw new Exception ('Votre adresse est inconnue dans la base.<br>
            Cliquez pour revenir à la <a href="index.php?action=login">page de connexion</a>');
        }
  }
}
