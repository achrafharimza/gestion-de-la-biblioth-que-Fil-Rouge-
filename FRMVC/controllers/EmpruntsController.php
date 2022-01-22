<?php 

class EmpruntsController{


public function getUseremprunts(){
		$data = array(
				'id_adherent' => $_SESSION['id_adherent']
			);
		$reservation = Emprunt::getByUser($data);
		return $reservation;
	}

public function getAllEmprunts(){
		$remprunts = Emprunt::getAll();
		return $remprunts;
	}

public function deleteEmprunts(){
		
			$data['id_emprunt'] = $_GET["terminer"];
			$data['id_livre'] = $_GET["id_livre"];
			// print_r($data['id_emprunt']);
			// die();
			$result = Emprunt::delete($data);
			if($result === 'ok'){
				$upd = Livre::updatequantitePLUS($data);
				Session::set('success','emprunt TERMINEé');
				Redirect::to('dashbord');
			}else{
				echo $result;
			}
		}





public function addEmprunt(){
		
		 $data['id_reservation'] = $_GET["accepter"];
		 
        
			$reservation = Reservation::getById($data);
			
		$data['id_adherent'] = $reservation->id_adherent;	
        $data['id_livre'] = $reservation->id_livre;
        $data['date_debut'] = $reservation->date_debut;
		$data['date_retour'] = $reservation->date_retour;

		$reservation = Reservation::delete($data);

		

	

$result = Emprunt::add($data);
	
			if($result === 'ok'){
				$upd = Livre::updatequantiteMOIN($data);
				Session::set('success','Reservation Accepté');
				Redirect::to('dashbord');
			}else{
				echo $result;
			}
		
	}



			


}



?>