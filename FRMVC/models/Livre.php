<?php 

class Livre {

static public function getAll(){
		
		$stmt = DB::connect()->prepare('SELECT * FROM livre ');
		$stmt->execute();
		return $stmt->fetchAll();
		
	}
	static public function getForHome(){
		
		$stmt = DB::connect()->prepare('SELECT * FROM livre ORDER BY id_livre DESC LIMIT 6 ');
		$stmt->execute();
		return $stmt->fetchAll();
		
	}
    static public function categories(){
		
		$stmt = DB::connect()->prepare('SELECT DISTINCT categorie FROM livre ORDER BY categorie ASC');
		$stmt->execute();
		return $stmt->fetchAll();
		
	}
	  static public function getByCat($data){
		$categorie = $data['categorie'];
		$stmt = DB::connect()->prepare("SELECT * FROM livre where categorie='$categorie' ORDER BY id_livre DESC");
		$stmt->execute();
		return $stmt->fetchAll();
		
	}
	  static public function getById($data){
		$id_livre = $data['id_livre'];
		$stmt = DB::connect()->prepare("SELECT * FROM livre where id_livre='$id_livre' ORDER BY id_livre DESC");
		$stmt->execute();
		return $stmt->fetchAll();
		
	}
	 static public function getBySearch($data){
		$titre = $data['titre'];
		$stmt = DB::connect()->prepare("SELECT * FROM livre where titre='$titre' ");
		$stmt->execute();
		// print_r($stmt->fetchAll());
		// die('messi');
		return $stmt->fetchAll();
		

	
	}

static public function delete($data){
		$id_livre = $data['id_livre'];
		
$stmt = DB::connect()->prepare("DELETE FROM livre where id_livre='$id_livre'");
		
		
			if($stmt->execute()){
				return 'ok';
			}else{
			return 'error';
		}
		
	}

	static public function add($data){
	  $titre= $data['titre'];
    $auteur=$data["auteur"];
	$date_livre = $data['date_livre'];
    $categorie = $data['categorie'];
    $description = $data['description'];
    $qantite = $data['qantite'];
	$file_name=$data['file_name'];
            move_uploaded_file($_FILES["image"]["tmp_name"],"image/".$file_name);
		
$stmt = DB::connect()->prepare("INSERT INTO livre (titre,auteur,date_livre,categorie,description,qantite,image)
			VALUES ('$titre','$auteur','$date_livre','$categorie','$description','$qantite','$file_name')");
		// $stmt->execute();
		
			if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}

	}

	static public function updatequantiteMOIN($data){
		$id_livre = $data['id_livre'];   
		$stmt = DB::connect()->prepare("UPDATE livre SET qantite=qantite - 1 WHERE id_livre='$id_livre'");
	$stmt->execute();
		
	}
	static public function updatequantitePLUS($data){
		$id_livre = $data['id_livre'];   
		$stmt = DB::connect()->prepare("UPDATE livre SET qantite=qantite + 1 WHERE id_livre='$id_livre'");
	$stmt->execute();
		
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

// static public function getByUser($data){
// 	$idc = $data['idc'];
// 	$query = 'SELECT * FROM reservation,vol  WHERE reservation.idc=:idc AND reservation.idv=vol.idv';
// 			$stmt = DB::connect()->prepare($query);
// 			$stmt->execute(array(":idc" => $idc));
// 			$reservation = $stmt->fetchAll();
// 			return $reservation;


// 	}
// 	static public function new($data){
// 	$idc = $data['idc'];
	
// 			$stmt = DB::connect()->prepare($query);
// 			$stmt->execute(array(":idc" => $idc));
// 			$reservation = $stmt->fetchAll();;
// 			return $reservation;


// 	}


// static public function delete($data){
// 		$id = $data['id'];
// 		try{
// 			$query = 'DELETE FROM reservation WHERE id=:id';
// 			$stmt = DB::connect()->prepare($query);
// 			$stmt->execute(array(":id" => $id));
// 			if($stmt->execute()){
// 				return 'ok';
// 			}
// 		}catch(PDOException $ex){
// 			echo 'erreur' . $ex->getMessage();
// 		}
// 	}

	
}
