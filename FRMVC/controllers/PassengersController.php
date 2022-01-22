<?php 

class PassengersController{

	
	
	public function addPassenger(){
		if(isset($_POST["submit"])){
           
            $np=$_POST["np"];
       
            for($i=1;$i<=$np;$i++)
				{
			$data = array(
                "idp" =>  $_SESSION["idc"] ,
				"nom" => $_POST["nom$i"],
				"age" => $_POST["age$i"],
				"gender" => $_POST["gender$i"],
			
				"phone" => $_POST["phone$i"],
			
			);
			$result = Passenger::add($data);
			if($result === "ok"){
				Session::set("success","Passenger Ajouté");
				
			}else{
				echo $result;
			}
		}}
	}

		}



?>