<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateurs extends CI_Controller {

	public function __construct()
	{

    	parent::__construct();

	    // Load model
	    $this->load->model("Utilisateurs_model");
 	}

	public function index()
	{
		
		$data['users'] = $this->Utilisateurs_model->getUsers();
		$this->load->view('utilisateurs/request/index', $data);
	}
	public function create()
	{
		$this->load->view('utilisateurs/create/index');

		if(isset($_POST['add']))
		{
			$this->Utilisateurs_model->addUser($_POST['firstname'], $_POST['lastname'], $_POST['email']);
		}
	}
	public function delete()
	{
		$this->load->view('utilisateurs/delete/index');

		if(isset($_POST['del']))
		{
			$this->Utilisateurs_model->deleteUser($_POST['firstname']);
		}
	}
	public function update()
	{
		$this->load->view('utilisateurs/update/index');
		if(isset($_POST['update']))
		{
			$this->Utilisateurs_model->updateUser($_POST['firstname'], $_POST['firstname2'], $_POST['lastname'], $_POST['email']);
		}
	}
}

?>