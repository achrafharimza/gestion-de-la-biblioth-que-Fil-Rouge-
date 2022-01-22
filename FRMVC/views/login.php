<?php 
	// if(isset($_POST['login'])){
	// 	$loginUser = new UsersController();
	// 	$loginUser->auth();
	// }
?>

	<section>
		<br><br><br>
		<div class="box">

			<h2>Login</h2>
			<?php include('./views/includes/alerts.php');?>
			<form action="action"  method="POST" >
				<div class="user-box">

					<input type="text" name="email" placeholder="email" required>

				</div>
				<div class="user-box">
					<input type="password" name="psd" placeholder="Password" required="">

				</div>
			
				<div class="user-box">

					<button type="submit" name="login"><i class="fa fa-lock"></i> SE
						CONNECTER</button>
				</div>

			</form>


			<hr>

			Vous n'avez pas un compte?<br />
			<a href='register'>Créer un compte</a>




		</div>
	</section>
	