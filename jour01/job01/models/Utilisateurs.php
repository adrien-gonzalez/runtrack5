<?php



class Utilisateurs_model{

	public function getUsers(){
		
		require "config/db.php";
		$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.'', $user, $pass);
		$select_user = $pdo->prepare('SELECT * FROM utilisateurs');
		$select_user->execute();
		$list_users = $select_user->fetchAll();

		return $list_users;

	}
	public function addUser($firstname, $lastname, $email){

		require "config/db.php";
		$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.'', $user, $pass);
		$insert_user = $pdo->prepare("INSERT INTO utilisateurs(firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')");
		$execute = $insert_user->execute();

		return $execute;		
	}
}


?>