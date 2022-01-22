<?php 

class Emprunt {

	static public function getByUser($data){
	$id_adherent = $data['id_adherent'];
	
$stmt = DB::connect()->prepare("SELECT * FROM emprunt e ,livre l WHERE e.id_adherent='$id_adherent' AND e.id_livre=l.id_livre");
		$stmt->execute();
		return $stmt->fetchAll();

	}


static public function getAll(){
		
		$stmt = DB::connect()->prepare('SELECT * FROM emprunt e ,livre l ,adherent a WHERE e.id_adherent=a.id_adherent AND e.id_livre=l.id_livre');
		$stmt->execute();
		return $stmt->fetchAll();
		
	}


static public function delete($data){
		$id_emprunt = $data['id_emprunt'];
		
$stmt = DB::connect()->prepare("DELETE FROM emprunt where id_emprunt='$id_emprunt'");
		
		
			if($stmt->execute()){
				return 'ok';
			}else{
			return 'error';
		}
		
	}





static public function add($data){
	$id_adherent = $data['id_adherent'];
	$id_reservation = $data['id_reservation'];
	 $id_livre=$data["id_livre"];
	$date_debut = $data['date_debut'];
	$date_retour = $data['date_retour'];
$stmt = DB::connect()->prepare("INSERT INTO emprunt (id_reservation,id_adherent,id_livre,date_debut,date_retour)
			VALUES ('$id_reservation','$id_adherent','$id_livre','$date_debut','$date_retour')");
		
		
			if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}

	}








}
