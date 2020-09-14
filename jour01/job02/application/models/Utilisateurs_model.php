<?php

class Utilisateurs_model extends CI_Model{

	public function getUsers(){
		
		$this->load->database();
		$query = $this->db->get('utilisateurs');
		$result = $query->result_array();
		return $result;
	}
	public function addUser($firstname, $lastname, $email){

		$this->load->database();
		if ($this->db->simple_query("INSERT INTO utilisateurs(firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')"))
		{
		        echo "Success!";
		}
		else
		{
		        echo "Query failed!";
		}	
	}
	public function deleteUser($firstname){

		$this->load->database();
		$this->db->where('firstname', $firstname);
		$this->db->delete('utilisateurs');		
	}
	public function updateUser($firstname, $firstname2, $lastname, $email){

		$this->load->database();

		$data  =  array ( 
        'firstname'  =>  $firstname2 , 
        'lastname'   =>  $lastname , 
        'email'   =>  $email
		);
		$this->db->where('firstname', $firstname);
		$this ->db->update('utilisateurs' , $data);
	}
}
?>
