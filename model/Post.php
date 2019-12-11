<?php
  require_once'Database.php';
  class Post extends Database {
    /*Permet de récupèrer un article grace a l'id de la barre de navigation*/
    public function getPost() {
      $db = Database::getConnection();
      if(isset($_GET['id']) AND !empty($_GET['id'])){
        $getId = htmlspecialchars($_GET['id']);
        $post = $db->prepare('SELECT * FROM post WHERE id = ?');
        $post->execute(array($getId));
        $post = $post->fetch();
        $title = $post['title'];
        $message = $post['message'];
      } else {
        echo "Article introuvable";
      }
      return $post;
    }
    /*Permet de créer un article*/
    public function createPost() {
      $db = Database::getConnection();
      if (isset($_POST['title'], $_POST['postText'])) {
        if(!empty($_POST['title']) AND !empty($_POST['postText'])){
          $postTitle = htmlspecialchars($_POST['title']);
          $postMessage = ($_POST['postText']);
          $insert = $db->prepare('INSERT INTO post(title, message, creation_date) VALUES (?, ?,NOW())');
          $insert->execute(array($postTitle, $postMessage));
          $_SESSION['info'] = "Votre article a bien été crée";
        } else {
          $_SESSION['info'] = "Veuillez remplir tous les champs";
          header('Location: index.php');
        }
      }
      if (isset($_SESSION['info'])) {
        echo $_SESSION['info'];
      }
    }
    /*Permet de modifier un article, il récupère les informations de l'article puis les modifie*/
    public function updatePost() {
      $db = Database::getConnection();
      if (isset($_POST['title'], $_POST['postText'])) {
        if(!empty($_POST['title']) AND !empty($_POST['postText'])){
          if(isset($_GET['id']) AND !empty($_GET['id'])) {
            $update_post = htmlspecialchars($_GET['id']);
          $post_title = htmlspecialchars($_POST['title']);
          $post_message = ($_POST['postText']);
          $update = $db->prepare('UPDATE post SET title = ?, message = ? WHERE id = ?');
          $update->execute(array($post_title, $post_message, $update_post));
          $_SESSION['info'] = "Votre article a bien été modifié";
          }
        } else {
          $_SESSION['info'] = "Veuillez remplir tous les champs";
          header('Location: index.php');
        }
      }
      if (isset($_SESSION['info'])) {
        echo $_SESSION['info'];
      }
    }
    /*Permet de lister les articles*/
    public function listPost() {
      $db = Database::getConnection();
      $post = $db->query('SELECT * FROM post ORDER BY id ASC');
      return $post;
    }
    /*Permet de récupèrer les trois derniers articles*/
    public function getLastPosts() {
      $db = Database::getConnection();
      $post = $db->query('SELECT * FROM post ORDER BY id DESC LIMIT 3');
      return $post;
    }
    /*Permet de supprimer un article*/
    public function deletePost() {
      $db = Database::getConnection();
      if(isset($_GET['id']) AND !empty($_GET['id'])) {
        $delete_post = htmlspecialchars($_GET['id']);
        $delete = $db->prepare('DELETE FROM post WHERE id = ?');
        $delete->execute(array($delete_post));
        $delete_comment = $db->prepare('DELETE FROM comment WHERE id_post = ?');
        $delete_comment->execute(array($delete_post));
        $_SESSION['info'] = "Votre article a bien été supprimé";
        header('Location: index.php');
      }
      else {
        $_SESSION['info'] = "Une erreur est survenue";
        header('Location: index.php');
      }
      if (isset($_SESSION['info'])) {
        echo $_SESSION['info'];
      }
    }
  }
