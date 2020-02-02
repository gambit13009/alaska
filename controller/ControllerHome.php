<?php
  class ControllerHome {
    // vue pour tout le monde sauf l'admin  
    public function homeView() {
      require 'model/Post.php';
      $lastposts = new Post();
      $post = $lastposts->getLastPosts();
      require 'view/accueil.php';
    }
    // fonction pour afficher les mentions légales
    public function mentionslegalesView() {
        require 'model/User.php';
        require 'view/mentionslegales.php';
    }  
    // fonction pour afficher la biographie  
    public function bioView() {
      require 'model/User.php';
      require 'view/bio.php';
    }
    // fonction pour afficher un article  
    public function getPost() {
      require 'model/User.php';
      require 'model/Post.php';
      require 'model/Commentary.php';
      $getpost = new Post();
      $post = $getpost->getPost();
      $getcomment = new Commentary();
      $comments = $getcomment->listCommentary();
      require 'view/article.php';
    }
    // fonction pour afficher les derniers articles  
    public function getLastPosts() {
      require 'model/User.php';
      require 'model/Post.php';
      $lastposts = new Post();
      $post = $lastposts->listPost();
      require 'view/articles.php';
    }
    // fonction pour afficher la liste de tous les articles  
    public function listArticles() {
      require 'model/User.php';
      require 'model/Post.php';
      $listpost = new Post();
      $post = $listpost->listPost();
      require 'view/articles.php';
    }
    // fonction pour se connecter  
    public function login() {
      require 'model/User.php';
      $login = new User();
      $login->loginUser();
    }
    // fonction pour se déconnecter  
    public function logout() {
      require 'model/User.php';
      $logout = new User();
      $logout->disconnect();
    }
    // fonction pour afficher les commentaires  
    public function getComment() {
      require 'model/User.php';
      require 'model/Post.php';
      require 'model/Commentary.php';
      $listcomment = new Commentary();
      $commentary = $listcomment->listCommentary();
    }
    // fonction pour créer un commentaire  
    public function createcomment() {
      require 'model/Post.php';
      require 'model/Commentary.php';
      $commentary = new Commentary();
      $comment = $commentary->createCommentary();
    }
    // fonction pour signaler un commentaire  
    public function reportCommentary() {
      require 'model/Post.php';
      require 'model/Commentary.php';
      $report = new Commentary();
      $comment = $report->reportCommentary();
    }
  }
