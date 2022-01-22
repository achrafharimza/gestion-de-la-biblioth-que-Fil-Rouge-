<?php 

class User{


static public function getAll(){
		
		$stmt = DB::connect()->prepare('SELECT * FROM adherent ');
		$stmt->execute();
		return $stmt->fetchAll();
		
	}


	static public function delete($data){
		$id_adherent = $data['id_adherent'];
		
$stmt = DB::connect()->prepare("DELETE FROM adherent where id_adherent='$id_adherent'");
		$stmt->execute();
		
			if($stmt->execute()){
				return 'ok';
			}else{
			return 'error';
		}
		
	}






	static public function login($data){
		$email = $data['email'];
		// $user_type=$data['user_type'];
		
		

		
		
				$stmt = DB::connect()->prepare("SELECT * FROM adherent where email='$email'");
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_OBJ);



	
	
	
	
	}


	
	static public function createUser($data){

		$nom = $data['nom'];
		$email = $data['email'];
		$cni = $data['cni'];
		$code_inscription = $data['code_inscription'];
		$psd = $data['psd'];
		$adherent_image = 'PDFT.PNG';
		$role = 'adherent';



		$stmt = DB::connect()->prepare("INSERT INTO adherent (nom,email,cni,code_inscription,psd,adherent_image,role )
			VALUES ('$nom','$email','$cni','$code_inscription','$psd','$adherent_image','$role')");
		

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		
		
	}





static public function getUser($data){
		$id_adherent = $data['id_adherent'];
		
				$stmt = DB::connect()->prepare("SELECT * FROM adherent where id_adherent='$id_adherent'");
		$stmt->execute();
		return $stmt->fetchAll();
	
	}

static public function update($data){
if(isset($_POST['nom'])){
	            $id_adherent = $data['id_adherent'];
	            $prenom = $data['prenom'];
                $nom = $data['nom'];
                $cni = $data['cni'];
				$email = $data['email'];
				$phone = $data['phone'];
				
                // $code_inscription = $data['code_inscription'];
		$stmt = DB::connect()->prepare("UPDATE adherent SET prenom='$prenom',nom='$nom',cni='$cni',email='$email',phone='$phone' WHERE id_adherent='$id_adherent'");
	$stmt->execute();
		}	
elseif(isset($_POST['psd'])){
	        $id_adherent = $data['id_adherent'];
	        $psd = $data['psd1'];
              
		$stmt = DB::connect()->prepare("UPDATE adherent SET psd='$psd' WHERE id_adherent='$id_adherent'");
	$stmt->execute();
		}

else{
	        $id_adherent = $data['id_adherent'];
	        $file_name=$data['file_name'];
            move_uploaded_file($_FILES["image"]["tmp_name"],"image/".$file_name);

		$stmt = DB::connect()->prepare("UPDATE adherent SET adherent_image='$file_name' WHERE id_adherent='$id_adherent'");
	    $stmt->execute();
		}




		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
	
		
	
	}


		

static public function check($data){
	$email = $data['email'];
	$cni = $data['cni'];
	
$stmt = DB::connect()->prepare("SELECT * FROM adherent  WHERE email='$email' or cni='$cni'");
		$stmt->execute();
		return $stmt->fetchAll();

	}

// inscription

static public function checkcode($data){
	$code_inscription = $data['code_inscription'];
	$cni = $data['cni'];
	
$stmt = DB::connect()->prepare("SELECT * FROM inscription  WHERE code_inscription='$code_inscription' and cni='$cni'");
		$stmt->execute();
		return $stmt->fetchAll();

	}




static public function inscription($data){

		$cni = $data['cni'];
		$debut = $data['debut'];
		$fin = $data['fin'];
		$code_inscription = $data['code_inscription'];
		



		$stmt = DB::connect()->prepare("INSERT INTO inscription (cni,debut,fin,code_inscription )
			VALUES ('$cni','$debut','$fin','$code_inscription')");
		

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		
		
	}

	static public function checkCNI($data){
	
	$cni = $data['cni'];
	
$stmt = DB::connect()->prepare("SELECT * FROM inscription  WHERE cni='$cni'");
		$stmt->execute();
		return $stmt->fetchAll();

	}

	static public function getAllinscription(){
		
		$stmt = DB::connect()->prepare('SELECT * FROM inscription ');
		$stmt->execute();
		return $stmt->fetchAll();
		
	}

static public function getoneinscription($data){
		$id = $data['id'];
		
				$stmt = DB::connect()->prepare("SELECT * FROM inscription where id='$id'");
		$stmt->execute();
		return $stmt->fetchAll();
	
	}

}

 ?>