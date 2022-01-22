<?php 

class Passenger {

	

	static public function add($data){
		$stmt = DB::connect()->prepare('INSERT INTO passenger (idp,nom,age,gender,phone)
			VALUES (:idp,:nom,:age,:gender,:phone)');
		$stmt->bindParam(':idp',$data['idp']);
		$stmt->bindParam(':nom',$data['nom']);
		$stmt->bindParam(':age',$data['age']);
		$stmt->bindParam(':gender',$data['gender']);
		$stmt->bindParam(':phone',$data['phone']);
		
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}
	
}
