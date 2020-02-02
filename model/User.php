<?php
  require_once'Database.php';
  class User extends Database {
    /* Permet de se déconnecter */
    public function disconnect() {
      $_SESSION['admin'] = 'pok';
      header('Location: index.php');
    }
    /* Permet de se connecter en tant qu'admin */
    public function loginUser() {
      $db = Database::getConnection();
      if(isset($_POST['buttonLogin'])) {
        $mail = htmlspecialchars($_POST['mail']);
        $pass = hash('md5', $_POST['pass']);
        if(!empty($mail) AND !empty($pass)) {
          $requser = $db->prepare("SELECT * FROM user WHERE email = ?");
          $result = $requser->execute(array($mail));
          $userinfo = $requser->fetch();
          if ($pass == $userinfo['password']) {
            $_SESSION['admin'] = 'ok';
            header('Location: index.php?action=admin');
          } else {
            $_SESSION['info'] = "Mail ou mot de passe incorrect";
            header('Location: index.php');
          }
        } else {
          $_SESSION['info'] = "Tous les champs doivent être complétés";
          header('Location: index.php');
        }
      } else {
        $_SESSION['info'] = "Un problème est survenu";
        header('Location: index.php');
      }
    }
    /* Permet de vérifier le mail de l'admin */  
    public function getForterocheMail() {
        $db = Database::getConnection();
        $req = $db->prepare('SELECT email FROM user WHERE id = 1');
        $req->execute(); $forterocheMail = $req->fetch(); 
        return $forterocheMail;
    }
    /* Permet de vérifier le mot de passe de l'admin */  
    public function getForterochePwd() {
        $db = Database::getConnection();
        $req = $db->prepare('SELECT password FROM user WHERE id = 1');
        $req->execute(); $forterochePwd = $req->fetch(); 
        return $forterochePwd;
    }
    /* Permet de renvoyer un nouveau mot de passe à l'admin */
    public function updateTempPwd($tempPwd, $mailtoAddress) {
        $db = Database::getConnection();
        $tempPassword = $db->prepare('UPDATE user SET password = ? WHERE email = ?');
        $randomInt = $tempPassword->execute(array($tempPwd, $mailtoAddress));        
    }
    /* Permet de modifier le mot de passe de l'admin */
    public function updatePwd($newPwd, $forterocheMail) { 
        $db = Database::getConnection();
        $updatePassword = $db->prepare('UPDATE user SET password = ? WHERE email = ?');
        $updatePassword->execute(array($newPwd, $forterocheMail[0]));
        if ($updatePassword = 'ok') {
            $_SESSION['info'] = "Mot de passe changé avec succès";
            header('Location: index.php');
        } else {
        $_SESSION['info'] = "Un problème est survenu";
        header('Location: index.php');
      }
    }
  }
