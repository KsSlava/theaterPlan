<?php 

class Blanks {

    public $db; 


    function __construct($db){

    	$this->db = $db; 

    }



	function add($title, $type){

           
		$this->db->query("INSERT INTO blanks VALUES (NULL, '$title', '$type')"); 

		return $this->db->errorCode(); 

	}



	function update($id, $title, $type){


		$this->db->query("UPDATE blanks SET title = '$title', type = '$type' WHERE id = '$id' "); 

		return $this->db->errorCode(); 

	}



	function delete($id){


		$this->db->query("DELETE FROM blanks WHERE id = '$id' "); 

		return $this->db->errorCode(); 

	}

}


?>