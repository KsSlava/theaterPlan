<?php 

class Plan {

	/*
	The date of plan can set: "month 02.2017" or "0"
	*/

	static function ViewPlanById($id){

		$db = Db::getConnection();
		
		$query = $db->query("

			SELECT  c.note1 as cnote1, c.note2 as cnote2, c.note3 as cnote3, c.date as cdate, c.publishDate as cpublishDate, c.updateDate as cupdateDate,
		            p.title as ptitle, p.period as period,
		            b.title as btitle, b.genre as bgenre,  b.type as btype, b.scene as bscene,
		            u.name as uname
 					FROM contents as c
 					INNER JOIN  plans  as p ON c.plan =p.id AND c.plan = '$id'
					INNER JOIN  blanks as b ON c.blank=b.id 
					INNER JOIN  users  as u ON c.user =u.id
 	
		");


		$query->setFetchMode(PDO::FETCH_ASSOC);

			$results = $query->fetchAll();

    			return $results; 
	}
  


	static function ViewPlanList(){

		$db = Db::getConnection();
		
		$query = $db->query("SELECT * FROM plans ORDER BY id LIMIT 12");

		$query->setFetchMode(PDO::FETCH_ASSOC);

			$results = $query->fetchAll();

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