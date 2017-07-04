<?php 

class Users {

    public $db; 


    function __construct($db){

    	$this->db = $db; 

    }



	function add($u, $p){

           
		$this->db->query("INSERT INTO users VALUES (NULL, '$u', '$p')"); 

		return $this->db->errorCode(); 

	}



	function update($id, $u, $p){


		$this->db->query("UPDATE users SET user = '$u', pass = '$p' WHERE id = '$id' "); 

		return $this->db->errorCode(); 

	}



	function delete($id){


		$this->db->query("DELETE FROM users WHERE id = '$id' "); 

		return $this->db->errorCode(); 

	}

}


?>