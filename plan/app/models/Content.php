<?php 

class Content {

    protected $db; 


    function __construct($db){

    	$this->db = $db; 

    }



	function add($plan, $text, $note1, $note2, $note3){

           
		$this->db->query("INSERT INTO content VALUES (NULL, '$plan', '$text', '$note1', '$note2', '$note3' )"); 

		return $this->db->errorinfo(); 

	}



	function update($id, $plan, $dateTime, $text, $note1, $note2, $note3){


		$this->db->query("UPDATE content SET plan = '$plan', text = '$text', note1='$note1', note2='$note2', note3='$note3' WHERE id = '$id' "); 

		return $this->db->errorinfo(); 

	}



	function delete($id){


		$this->db->query("DELETE FROM content WHERE id = '$id' "); 

		return $this->db->errorinfo(); 

	}

}


?>