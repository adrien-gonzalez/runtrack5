<?php


require "models/Utilisateurs.php";

class Utilisateurs{

	public function getUsers(){


		$list_users = new Utilisateurs_model;
		$users = $list_users->getUsers();
		include "views/list-users.php";
	}

	public function addUser(){

		$insert_user = new Utilisateurs_model;
		include "views/add-user.php";
		

		if(isset($_POST['add']))
		{
			$insert_user->addUser($_POST['firstname'],$_POST['lastname'],$_POST['email']);
		}

	}
}

?>