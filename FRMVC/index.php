<?php 

require_once './autoload.php';
require_once './controllers/HomeController.php';



$home = new HomeController();  

$AdherentPages = ['home','login','register','books','infobook','mesreservation','action','monespace','contact'];
$GuestPages = ['home','','register','login','infobook','books','action'];
$AdminPages = ['home','add','update','delete','logout','action','reservation','ticket','dashbord','recu','updateVols','reservations','users'];


if(isset($_SESSION['logged'])  && $_SESSION['logged'] === true){

	if(isset($_GET['page'])&& $_SESSION['role'] === 'adherent'){
		require_once './views/includes/header.php';
		if(in_array($_GET['page'],$AdherentPages)){
			$page = $_GET['page'];
			$home->index($page);
			require_once './views/includes/footer.php';
		}else{
			include('views/includes/404.php');
		}
	}
else if(isset($_GET['page'])&& $_SESSION['role'] === 'admin'){
	
		if(in_array($_GET['page'],$AdminPages)){
			$page = $_GET['page'];
			$home->index($page);
		}else{
			include('views/includes/404.php');
		}
	}



}

elseif(!isset($_SESSION['logged']) ){

require_once './views/includes/headerGuest.php';
		
		if(!isset($_GET['page'])){
			$home->index('home');
			require_once './views/includes/footer.php';
		}
		elseif(in_array($_GET['page'],$GuestPages)){
			$page = $_GET['page'];
			$home->index($page);
			require_once './views/includes/footer.php';
		}else{
			include('views/includes/404.php');
		}
	

}


else if(isset($_GET['page']) && $_GET['page'] === 'register'){
	$home->index('register');
}
else if(isset($_GET['page']) && $_GET['page'] === 'login'){
	$home->index('login');
}
