<?php 
	if(isset($_POST['login'])){
		$loginUser = new UsersController();
		$loginUser->auth();
	}
if (isset($_GET['logout'])) {
	$reservation = new UsersController();
	$reservation->logout();
}

if (isset($_GET['search'])) {
	$reservation = new LivresController();
	$reservation->getBySearch();
}


      if(isset($_POST['resevrver'])){
		$loginUser = new ReservationsController();
		$loginUser->addReservation();
	}


if (isset($_GET['annuler'])) {
	$reservation = new ReservationsController();
	$reservation->deleteReservation();
}


if(isset($_POST['update'])){
		$updateUser = new UsersController();
		$updateUser->updateUser();
	}
   
if (isset($_GET['supprimerAD'])) {
	$reservation = new UsersController();
	$reservation->deleteUser();
}
if (isset($_GET['refuser'])) {
	$reservation = new ReservationsController();
	$reservation->deleteReservation();
}
if (isset($_GET['accepter'])) {
$emprunt = new EmpruntsController();
	$emprunt->addEmprunt();



}

if (isset($_GET['terminer'])) {
	$emprunt = new EmpruntsController();
	$emprunt->deleteEmprunts();
}
if (isset($_GET['supprimerB'])) {
	$livre = new LivresController();
	$livre->delete();
}
if(isset($_POST['addbook'])){
		$updateUser = new LivresController();
		$updateUser->addLivre();
	}

if(isset($_POST['addinsc'])){
		$updateUser = new UsersController();
		$updateUser->inscription();
	}


?>
