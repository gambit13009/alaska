<?php
  require_once'Database.php';
  class User extends Database {
    /*Permet de déconnecter l'utilisateur*/
    public function disconnect() {
      $_SESSION['admin'] = false;
      header('Location: index.php');
    }
    /*Permet de connecter un utilisateur*/
    public function loginUser() {
      var_dump('connect');
      $db = Database::getConnection();
      if(isset($_POST['buttonLogin'])) {
        $mail = htmlspecialchars($_POST['mail']);
        $pass = hash('md5', $_POST['pass']);
        if(!empty($mail) AND !empty($pass)) {
          $requser = $db->prepare("SELECT * FROM user WHERE email = ?");
          $result = $requser->execute(array($mail));
          $userinfo = $requser->fetch();
          var_dump($_SESSION['session_ok']);
          if ($pass = $userinfo['password']) {
            var_dump('--ok');
            $_SESSION['admin'] = true;
            header("Location: index.php?action=admin");
            }
           else {
             echo "Mail ou mot de passe incorrect";
           }
          }
          else {
            echo "Tous les champs doivent être complétés";
          }
        }
        else {
          echo "Un problème est survenu";
        }
      }
    }
?>