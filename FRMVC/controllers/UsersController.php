<?php 

class UsersController {



public function getAllUsers(){
		$users = User::getAll();
		return $users;
	}



public function deleteUser(){
		

		$data['id_adherent'] = $_GET["supprimerAD"];
			$result = User::delete($data);
			if($result === 'ok'){
				Session::set('success','adherent Supprimé');
				Redirect::to('dashbord');
			}else{
				echo $result;
			}
	}




	function auth(){
		
			$data['email'] = $_POST['email'];
			$data['psd'] = $_POST['psd'];
			
			$result = User::login($data);
			
			if($result->email === $_POST['email'] && password_verify($_POST['psd'],$result->psd)  ){
				// $result->psd === $_POST['psd']


				$_SESSION['logged'] = true;
				$_SESSION['email'] = $result->email;
				$_SESSION['nom'] = $result->nom;
				$_SESSION['psd'] = $result->psd;
				$_SESSION['id_adherent'] = $result->id_adherent;
				$_SESSION['role'] = $result->role;

			    if($result->role === 'adherent'){

					Redirect::to('home');
				}
				elseif($result->role === 'admin'){
					Redirect::to('dashbord');

				}
				
				

			}
			
			
			else{
				Session::set('error','Pseudo ou mot de passe est incorrect');
				Redirect::to('login');
			}
		
	}

	public function register(){
		

			$options = [
				'cost' => 12
			];
			
		$password = password_hash($_POST['psd'],PASSWORD_BCRYPT,$options);
		
			$data = array(
				'nom' => $_POST['nom'],
				'email' => $_POST['email'],
				'cni' => $_POST['cni'],
				'psd' => $password,
				'code_inscription' => $_POST['code_inscription'],
			);
            $check = User::check($data);
			$checkcode = User::checkcode($data);
        
	if(empty($check)){

             if(!empty($checkcode)){
				$result = User::createUser($data);
		        if($result === 'ok'){
			                Session::set('success','Compte crée');
				            Redirect::to('login');
			    }else{
				echo $result;
			    }
             }
		

		    else{
			Session::set('error','code inscription ivalide');
				Redirect::to('register');
		    }
    }
	else{
			Session::set('error','user deja crier');
				Redirect::to('register');
	}
		
	}

public function getOneUser(){
		
			$data = array(
				'id_adherent' => $_SESSION['id_adherent'] ,
			);
			$user = User::getUser($data);
			return $user;
		
	}


public function updateUser(){
if(isset($_POST['nom'])){
			$data = array(
				'id_adherent' => $_SESSION['id_adherent'] ,
					'nom' => $_POST['nom'],
					'prenom' => $_POST['prenom'],
					'cni' => $_POST['cni'],
				'email' => $_POST['email'],
				'phone' => $_POST['phone'],
			
				'code_inscription' => $_POST['code_inscription'],
				
			);
			$result = User::update($data);
		}
elseif(isset($_POST['psd'])){
			$data = array(
				'id_adherent' => $_SESSION['id_adherent'] ,
					'psd' => $_POST['psd'],
					'psd1' => $_POST['psd1'],
					'psd2' => $_POST['psd2'],
			);
    
	      if($data['psd'] === $_SESSION['psd']){
				
                if($data['psd1'] === $data['psd2']){
				
             $result = User::update($data);
		
			     }else{
			Session::set('error','Passwords Dont Match');
				Redirect::to('monespace');
		           }	

			}
			else{
				Session::set('error','Password is not correct');
				Redirect::to('monespace');
			}	
		}
else{
			$data = array(
				'id_adherent' => $_SESSION['id_adherent'] ,
					'file_name' => $_FILES["image"]["name"],
					
			
				
				
			);
			$result = User::update($data);
			
		}






if($result === 'ok'){
Session::set('success','compte est Modifié');
Redirect::to('monespace');
}else{
				echo $result;
			}
			
		
	}













	static public function logout(){
		session_destroy();
		Redirect::to('login');
	}



public function inscription(){
		

		
			$data = array(
				'cni' => $_POST['cni'],
				'debut' => $_POST['debut'],
				'fin' => $_POST['fin'],
				'code_inscription' => mt_rand(),

			);
          
        $checkCNI = User::checkCNI($data);
if(empty($checkCNI)){
				$result = User::inscription($data);
		        if($result === 'ok'){
			                Session::set('success','inscription crée');
				            Redirect::to('dashbord');
			
             }
		

	}	 

	else{
			Session::set('error','cni deja inscrit');
				Redirect::to('dashbord');
	}
		
	}

public function getinscriptions(){
		$inscriptions = User::getAllinscription();
		return $inscriptions;
	}

public function oneinscription(){
		
			$data = array(
				'id' => $_GET['imprimer'] ,
			);
			$inscription = User::getoneinscription($data);
			return $inscription;
		
	}

}
