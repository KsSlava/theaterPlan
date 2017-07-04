<?php 

class Statistic {

    protected $db;
    public $dateTime; 


    function __construct($db){

    	$this->db = $db; 
    	$this->dateTime = date("Y-m-d H:i:s");  

    }



	function add($iduser, $idcontent){

           
		$this->db->query("INSERT INTO statistic VALUES ('$iduser', '$idcontent', '$this->dateTime', 'add')"); 

		return $this->db->errorinfo(); 

	}



	function update($iduser, $idcontent){


		$this->db->query("UPDATE statistic SET iduser = '$iduser', dateTime = '$this->dateTime', action = 'update' WHERE idcontent = '$idcontent' "); 

		return $this->db->errorinfo(); 

	}



	function delete($id){


		$this->db->query("DELETE FROM statistic WHERE id = '$id' "); 

		return $this->db->errorinfo(); 

	}

}


?>