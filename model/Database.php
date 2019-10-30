<?php class Database { 
	public function getConnection(){ //Informations de la BDD 
		$servername='127.0.0.1'; 
		$dbname='alaska';
		$username='root'; 
		$password='gambit13'; 
		try { 
			// Connexion à la base de donnée 
			$db = new PDO('mysql:host='.$servername.'; dbname='.$dbname, $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')); 
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		} 
		catch (Exception $e) { 
			echo 'Exception reçue : ', $e->getMessage(), "\n"; 
		} 
		return $db; 
	}
}