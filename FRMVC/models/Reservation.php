<?php 

class Reservation {

	static public function getByUser($data){
	$id_adherent = $data['id_adherent'];
	
$stmt = DB::connect()->prepare("SELECT * FROM reservation r ,livre l WHERE r.id_adherent='$id_adherent' AND r.id_livre=l.id_livre");
		$stmt->execute();
		return $stmt->fetchAll();

	}
	static public function add($data){
	$id_adherent = $data['id_adherent'];
	 $id_livre=$data["id_livre"];
	$date_debut = $data['date_debut'];
	$date_retour = $data['date_retour'];
    $stmt = DB::connect()->prepare("INSERT INTO reservation (id_adherent,id_livre,date_debut,date_retour)
			VALUES ('$id_adherent','$id_livre','$date_debut','$date_retour')");
		
		
			if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}

	}

	static public function delete($data){
		$id_reservation = $data['id_reservation'];
		
$stmt = DB::connect()->prepare("DELETE FROM reservation where id_reservation='$id_reservation'");
		
		
			if($stmt->execute()){
				return 'ok';
			}else{
			return 'error';
		}
		
	}

static public function getAll(){
		
		$stmt = DB::connect()->prepare( "SELECT * FROM reservation r ,livre l ,adherent a  WHERE r.id_adherent=a.id_adherent AND r.id_livre=l.id_livre ORDER BY id_reservation DESC");
		$stmt->execute();
		return $stmt->fetchAll();
		
	}

	static public function getById($data){
	$id_reservation = $data['id_reservation'];
	
$stmt = DB::connect()->prepare("SELECT * FROM reservation where id_reservation='$id_reservation'");
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_OBJ);
// $user = $stmt->fetch(PDO::FETCH_OBJ);
// 			return $user;
	}

		static public function check($data){
	$id_adherent = $data['id_adherent'];
	$id_livre = $data['id_livre'];
	
// $stmt = DB::connect()->prepare("SELECT * FROM reservation  WHERE id_adherent='$id_adherent' AND id_livre='$id_livre'");
// $stmt = DB::connect()->prepare("SELECT * FROM reservation r, emprunt e WHERE r.id_adherent='$id_adherent' AND r.id_livre='$id_livre' AND e.id_adherent='$id_adherent' AND e.id_livre='$id_livre'");
$stmt = DB::connect()->prepare("SELECT id_adherent FROM reservation  WHERE id_adherent='$id_adherent' AND id_livre='$id_livre' UNION ALL SELECT id_adherent FROM emprunt  WHERE id_adherent='$id_adherent' AND id_livre='$id_livre'");

		$stmt->execute();
		return $stmt->fetchAll();

	}

// 	static public function add($data){
// 		$stmt = DB::connect()->prepare('INSERT INTO Reservation (idc,idv,numplace,dater)
// 			VALUES (:idc,:idv,:numplace,:dater)');
// 		$stmt->bindParam(':idc',$data['idc']);
// 		$stmt->bindParam(':idv',$data['idv']);
// 		$stmt->bindParam(':numplace',$data['numplace']);
// 		$stmt->bindParam(':dater',$data['dater']);
	
		
// 		$stmt->execute();
// 	}


// 	static public function new($data){
// 	$idc = $data['idc'];
	
// 			$stmt = DB::connect()->prepare($query);
// 			$stmt->execute(array(":idc" => $idc));
// 			$reservation = $stmt->fetchAll();;
// 			return $reservation;


// 	}




	
}
