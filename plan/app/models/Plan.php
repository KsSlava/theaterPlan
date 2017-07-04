<?php 

class Plan {

    protected $db; 


    function __construct($db){

    	$this->db = $db; 

    }



	function add($title){

           
		$this->db->query("INSERT INTO plan VALUES (NULL, '$title' )"); 

		return $this->db->errorinfo(); 

	}



	function update($id, $title){


		$this->db->query("UPDATE plan SET title = '$title' WHERE id = '$id' "); 

		return $this->db->errorinfo(); 

	}



	function delete($id){


		$this->db->query("DELETE FROM plan WHERE id = '$id' "); 

		return $this->db->errorinfo(); 

	}

}


?>