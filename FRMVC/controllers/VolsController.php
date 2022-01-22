<?php 

class VolsController{

	public function getAllVols(){
		$vols = Vol::getAll();
		return $vols;
	}

public function findVols(){ 
		if(isset($_POST['Search'])){
			$data = array(
				'depart' => $_POST['depart'],
				'destination' => $_POST['destination'],
			
			
			);
		}
		$vols = Vol::getBySearch($data);
		return $vols;
	} 



	public function findRVols(){ 
		if(isset($_POST['Search'])){
			$data = array(
				'destination' => $_POST['depart'],
				'depart' => $_POST['destination'],
			
			
			);
		}
		$volrs = Vol::getBySearch($data);
		return $volrs;
	} 

public function getOneVol(){
		if(isset($_POST['idv'])){
			$data = array(
				'idv' => $_POST['idv']
			);
			$vol = Vol::getVol($data);
			return $vol;
		}
	}

public function updateVol(){
		if(isset($_POST['update'])){
			$data = array(
				'idv' => $_POST['idv'],
				'depart' => $_POST['depart'],
				'destination' => $_POST['destination'],
				
				'prix' => $_POST['prix'],
				'nbplace' => $_POST['nbplace'],
				'datedepart' => $_POST['datedepart'],
				
			);
			$result = Vol::update($data);
			if($result === 'ok'){
				Session::set('success','Employé Modifié');
				Redirect::to('vols');
			}else{
				echo $result;
			}
		}
	}

	public function addVol(){
		if(isset($_POST['add'])){
			$data = array(
				'depart' => $_POST['depart'],
				'destination' => $_POST['destination'],
				
				'prix' => $_POST['prix'],
				'nbplace' => $_POST['nbplace'],
				'datedepart' => $_POST['datedepart'],
			);
			$result = Vol::add($data);
			if($result === 'ok'){
				Session::set('success','Employé Ajouté');
				Redirect::to('vols');
			}else{
				echo $result;
			}
		}
	}




	

public function deleteVol(){
		if(isset($_POST['idv'])){
			$data['idv'] = $_POST['idv'];
			$result = Vol::delete($data);
			if($result === 'ok'){
				Session::set('success','vol Supprimé');
				Redirect::to('vols');
			}else{
				echo $result;
			}
		}
	}

	















	}



?>