<?php
  class ControllerHome {
    public function homeView() {
      require 'model/Post.php';
      $lastposts = new Post();
      $post = $lastposts->getLastPosts();
      require 'view/accueil.php';
    }
    public function bioView() {
      require 'model/User.php';
      require 'view/bio.php';
    }
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
    public function getLastPosts() {
      require 'model/User.php';
      require 'model/Post.php';
      $lastposts = new Post();
      $post = $lastposts->listPost();
      require 'view/articles.php';
    }
    public function listArticles() {
      require 'model/User.php';
      require 'model/Post.php';
      $listpost = new Post();
      $post = $listpost->listPost();
      require 'view/articles.php';
    }
    public function login() {
      require 'model/User.php';
      $login = new User();
      $login->loginUser();
    }
    public function logout() {
      require 'model/User.php';
      $logout = new User();
      $logout->disconnect();
    }
    public function getComment() {
      require 'model/User.php';
      require 'model/Post.php';
      require 'model/Commentary.php';
      $listcomment = new Commentary();
      $commentary = $listcomment->listCommentary();
    }
    public function createcomment() {
      require 'model/Post.php';
      require 'model/Commentary.php';
      $commentary = new Commentary();
      $comment = $commentary->createCommentary();
    }
    public function reportCommentary() {
      require 'model/Post.php';
      require 'model/Commentary.php';
      $report = new Commentary();
      $comment = $report->reportCommentary();
    }
  }
