<!DOCTYPE html>
<html>
<head>
	<title>GO FLIGHT</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
<link rel="stylesheet" href="style/sqqaw.css">	
<link rel="stylesheet" href="style/main.js">	

</head>
<body >
		<nav id="navm" class="navbar navbar-expand-lg navbar-light bg-secondary">
		<a class="navbar-brand" href="#">Go FLIGHT</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="dashbord">Accueil </a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="vols">settings vols</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="reservations">settings reservations</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="users">settings clients account </a>
				</li>
                <li class="nav-item">
					<a class="nav-link" href="logout">logout</a>
				</li>
			
			</ul>
	 <?php
	
			echo " WELCOME" ," ".$_SESSION['fullname']."";
		
		?>
		</div>
	</nav>