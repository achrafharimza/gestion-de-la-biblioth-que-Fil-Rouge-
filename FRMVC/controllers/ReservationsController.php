<?php 

class ReservationsController{

public function getUserReservations(){
		$data = array(
				'id_adherent' => $_SESSION['id_adherent']
			);
		$reservation = Reservation::getByUser($data);
		return $reservation;
	}
public function getById($data){
	$id_reservation = $data['id_reservation'];
		$reservation = Reservation::getById($id_reservation);
		return $reservation;
	}



public function getAllReservations(){
		$reservations = Reservation::getAll();
		return $reservations;
	}



	
	
	public function addReservation(){
		 $id_livre=$_POST["id_livre"];
            $data = array(
    "id_adherent"=> $_SESSION["id_adherent"],
	
    "id_livre"=> $_POST["id_livre"],
	"date_debut" => $_POST["date_debut"],
	"date_retour" => $_POST["date_retour"],
			
			);
			$result = Reservation::add($data);
			
			if($result === 'ok'){
				
				Session::set('success','reservation est bien passé');
				Redirect::to("infobook?id_livre=$id_livre");
			}
	}



	
	public function deleteReservation(){
		if(isset($_GET["refuser"])){
			$data['id_reservation'] = $_GET["refuser"];
			$result = Reservation::delete($data);
			if($result === 'ok'){
				Session::set('success','Reservation Supprimé');
				Redirect::to('dashbord');
			}else{
				echo $result;
			}
		}

	elseif(isset($_GET["annuler"])){
			$data['id_reservation'] = $_GET["annuler"];
			$result = Reservation::delete($data);
			if($result === 'ok'){
				Session::set('success','Reservation Supprimé');
				Redirect::to('dashbord');
			}else{
				echo $result;
			}
		}
		
	}

		

public function checkUserReservation(){
		$data = array(
				'id_adherent' => $_SESSION['id_adherent'],
				'id_livre' => $_GET['id_livre'],
				
				
			);
		$reservation = Reservation::check($data);
		return $reservation;
	}







}



?>