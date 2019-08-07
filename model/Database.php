<?php
  class Database {
    /*Effectue une connexion avec la base de données*/
    public function getConnection() {
      $db = new PDO('mysql:host=127.0.0.1;dbname=alaska', 'root', 'gambit13');
      return $db;
    }
  }
?>