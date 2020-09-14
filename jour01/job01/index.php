<?php

require "controllers/Utilisateurs.php";
$list_users = new Utilisateurs;

if(isset($_GET['page']) && $_GET['page'] == "addUser")
{
	$list_users->addUser();
}
else
{
	$list_users->getUsers();
}


?>