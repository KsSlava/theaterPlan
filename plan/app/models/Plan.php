<?php 

class Plan {

	static function ViewPlanById($id){

		$db = Db::getConnection();
		
		$query = $db->query("SELECT * FROM users WHERE id ='$id'");
		
		foreach($query as $row) {

		     $results[] = array($row[1]=>$row[2]);

		}
	//	$query->setFetchMode(PDO::FETCH_ASSOC);
	//	$results = $query->fetch();
		return $results; 
	}
  



	// function add($title){

           
	// 	$this->db->query("INSERT INTO plan VALUES (NULL, '$title' )"); 

	// 	return $this->db->errorinfo(); 

	// }



	// function update($id, $title){


	// 	$this->db->query("UPDATE plan SET title = '$title' WHERE id = '$id' "); 

	// 	return $this->db->errorinfo(); 

	// }



	// function delete($id){


	// 	$this->db->query("DELETE FROM plan WHERE id = '$id' "); 

	// 	return $this->db->errorinfo(); 

	// }

}


?>