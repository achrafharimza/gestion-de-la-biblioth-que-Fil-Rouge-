<?php 

class LivresController{


public function getAllLivres(){
		$livres = livre::getAll();
		return $livres;
	}
	public function getForHome(){
		$livres = livre::getForHome();
		return $livres;
	}

public function getAllCategories(){
		$categories = livre::categories();
		return $categories;
	}

	public function getByCategories(){

		 $data = array(
                "categorie" =>  $_GET['categorie'] ,
		
			);
		 
		$livresCat = livre::getByCat($data);
		return $livresCat;
	}
	public function getById(){

		 $data = array(
                "id_livre" =>  $_GET['id_livre'] ,
		
			);
		 
		$livresId = livre::getById($data);
		return $livresId;
	}

	public function getBySearch(){

		 $data = array(
                "titre" =>  $_GET['titre'] ,
		
			);
		 
		$livresSrch = livre::getBySearch($data);


		return $livresSrch;
	}
	
	
	public function delete(){
		
			$data['id_livre'] = $_GET["supprimerB"];
			$result = Livre::delete($data);
			if($result === 'ok'){
				Session::set('success','book Supprimé');
				Redirect::to('dashbord');
			}else{
				echo $result;
			}
		}
		

public function addLivre(){
		 
            $data = array(
    
	
    
	"titre" => $_POST["titre"],
	"auteur" => $_POST["auteur"],
	"date_livre" => $_POST["date_livre"],
	"categorie" => $_POST["categorie"],
	"description" => $_POST["description"],
	"qantite" => $_POST["qantite"],
	'file_name' => $_FILES["image"]["name"],
			
			);
			$result = Livre::add($data);
			if($result === 'ok'){
				Session::set('success','Livre est bien ajouté');
				Redirect::to('dashbord');
			}
	}



 



}



?>