<?php 

class Vol {

	static public function getAll(){
		
		$stmt = DB::connect()->prepare('SELECT * FROM vol ');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}



	static public function getBySearch($data){
	$depart = $data['depart'];
	$destination = $data['destination'];
	$query = 'SELECT * FROM vol where depart=:depart AND destination=:destination '   ;

			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":depart" => $depart,

			":destination" => $destination,
		
		
		));
			$vol = $stmt->fetchAll();;
			return $vol;



	}

static public function update($data){
	$idv = $data['idv'];
		$stmt = DB::connect()->prepare('UPDATE vol SET depart=:depart,destination=:destination,prix=:prix,nbplace=:nbplace ,datedepart=:datedepart WHERE idv=:idv');
		$stmt->bindParam(':idv',$data['idv']);
		$stmt->bindParam(':depart',$data['depart']);
		
		$stmt->bindParam(':destination',$data['destination']);
		$stmt->bindParam(':prix',$data['prix']);
		$stmt->bindParam(':nbplace',$data['nbplace']);
		$stmt->bindParam(':datedepart',$data['datedepart']);
			
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
		
	
	}

static public function add($data){
		$stmt = DB::connect()->prepare('INSERT INTO vol (depart,destination,prix,nbplace,datedepart)
			VALUES (:depart,:destination,:prix,:nbplace,:datedepart)');
		
		$stmt->bindParam(':depart',$data['depart']);
		
		$stmt->bindParam(':destination',$data['destination']);
		$stmt->bindParam(':prix',$data['prix']);
		$stmt->bindParam(':nbplace',$data['nbplace']);
		$stmt->bindParam(':datedepart',$data['datedepart']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}





















static public function getVol($data){
		$idv = $data['idv'];
		try{
			$query = 'SELECT * FROM vol WHERE idv=:idv';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":idv" => $idv));
			$vol = $stmt->fetchAll();
			return $vol;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}






















	static public function delete($data){
		$idv = $data['idv'];
		try{
			$query = 'DELETE FROM vol WHERE idv=:idv';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":idv" => $idv));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}


















}


	