<?php
  require_once'Database.php';
  class Commentary extends Database {
    /*Permet de lister les commentaires et fait une liaison avec la table utilisateur pour récuperer les pseudos*/
    public function listCommentary() {
      $db = Database::getConnection();
      $postId = htmlspecialchars($_GET['id']);
      $commentary = $db->prepare('SELECT * FROM comment WHERE id_post = ?');
      $commentary->execute(array($postId));
      $commentary = $commentary->fetch();
      return $commentary;
    }
    /*Permet de lister les commentaires signalés*/
    public function listReportedCommentary() {
      $db = Database::getConnection();
      $commentary = $db->prepare('SELECT * FROM comment WHERE report = 1 ORDER BY id_post');
      $commentary->execute();
      return $commentary;
    }
    /*Permet de créer un commentaire*/
    public function createCommentary() {
      $db = Database::getConnection();
      if (isset($_POST['comment'])) {
        if(!empty($_POST['comment'])){
          $postCommentary = htmlspecialchars($_POST['comment']);
          $pseudo = htmlspecialchars($_POST['pseudo']);
          $postId = ($_GET['id']);
          $insert = $db->prepare('INSERT INTO comment(alias_user, id_post, comment_text, comment_date, report) VALUES (?, ?, ?, NOW(), ?)');
          $result = $insert->execute(array($pseudo, $postId, $postCommentary, 'a'));
          $info = "Votre commentaire a bien été crée";
        }
        else {
          $info = "Veuillez remplir tous les champs";
        }
      }
      if (isset($info)) {
        echo $info;
      }
    }
    /*Permet de supprimer un commentaire*/
    public function deleteCommentary() {
      $db = Database::getConnection();
      if(isset($_GET['id']) AND !empty($_GET['id'])) {
        $deleteComment = htmlspecialchars($_GET['id']);
        $delete = $db->prepare('DELETE FROM comment WHERE id = ?');
        $delete->execute(array($deleteComment));
        $info = "Votre commentaire a bien été supprimé";
      }
      else {
        $info = "Une erreur est survenue";
      }
      if (isset($info)) {
        echo $info;
      }
    }
    /*Permet de valider un commentaire*/
    public function validateCommentary() {
      $db = Database::getConnection();
      if(isset($_GET['id']) AND !empty($_GET['id'])) {
        $reportId = htmlspecialchars($_GET['id']);
        $report = $db->prepare('UPDATE comment SET report = 0 WHERE id = ?');
        $report->execute(array($reportId));
        $info = "Votre commentaire a bien été validé";
      }
      else {
        $info = "Une erreur est survenue";
      }
      if (isset($info)) {
        echo $info;
      }
    }
    /*Permet de signaler un commentaire*/
    public function reportCommentary() {
      $db = Database::getConnection();
      if(isset($_GET['id']) AND !empty($_GET['id'])) {
        $reportId = htmlspecialchars($_GET['id']);
        $report = $db->prepare('UPDATE comment SET report = 1 WHERE id = ?');
        $report->execute(array($reportId));
        $info = "Votre commentaire a bien été signalé";
      }
      else {
        $info = "Une erreur est survenue";
      }
      if (isset($info)) {
        echo $info;
      }
    }
  }
?>