<?php
  require_once'Database.php';
  class User extends Database {
    /* Permet de déconnecter l'administrateur */
    public function disconnect() {
      $_SESSION['admin'] = 'pok';
      header('Location: index.php');
    }
    /* Permet de connecter l'administrateur */
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
    public function getForterocheMail() {
        $db = Database::getConnection();
        $req = $db->prepare('SELECT email FROM user WHERE id = 1');
        $req->execute(); $forterocheMail = $req->fetch(); 
        return $forterocheMail;
    }
    /* Permet de renvoyer un nouveau mot de passe à l'administrateur */
    public function updateTempPwd($tempPwd, $mailtoAdress) {
        $db = Database::getConnection();
        $tempPassword = $db->prepare('UPDATE user SET password = ? WHERE email = ?');
        $randomInt = $tempPassword->execute(array($tempPwd, $mailtoAdress));
    }
    /* Permet de modifier le mot de passe de l'administrateur */
    public function updatePwd($oldPwd, $newPwd, $newPwdConfirm, $mailtoAdress) { 
        $db = Database::getConnection();
        $updatePassword = $db->prepare('UPDATE user SET password = ? WHERE email = ?');
        $updatePassword->execute(array($oldPwd, $newPwd, $newPwdConfirm, $mailtoAdress)); 
    }
  }
