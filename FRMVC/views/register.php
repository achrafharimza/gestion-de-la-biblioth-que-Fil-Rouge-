<?php 

	if(isset($_POST['submit'])){
		$loginUser = new UsersController();
		$loginUser->register();
	}

//  if(isset($_POST['submit'])){
    
// 	   $nom = $_POST['nom'];
// 				$email = $_POST['email'];
// 				$phone = $_POST['phone'];
// 				$psd = $_POST['psd'];
//         $code_inscription = $_POST['code_inscription'];

// $result =  mysqli_query($conn, "INSERT INTO adherent (nom,email,phone,psd,code_inscription)
// 			VALUES ('$nom','$email','$phone','$psd','$code_inscription')");
//  header("Location: index.php");
//   }


?>

    <section>
        <br><br><br>
        <div class="box">

            <h2>register</h2>
            <?php include('./views/includes/alerts.php');?>
            <form  method="POST">
                <div class="user-box">

                    <input type="text" name="nom" placeholder="name" required="">

                </div>
                <div class="user-box">

                    <input type="text" name="email" placeholder="email" required="">

                </div>
                <div class="user-box">

                    <input type="text" name="cni" placeholder="cni " required="">

                </div>
                <div class="user-box">

                    <input type="text" name="code_inscription" placeholder="code_inscription" required="">

                </div>

                <div class="user-box">
                    <input type="password" name="psd" placeholder="Password" required="">

                </div>

                <div class="user-box">
                    <button type="submit" name="submit">Inscription</button>
                </div>

            </form>


            <hr>

            Vous avez deja un compte?<br />
            <a href='index.html'>CONNECTER</a>


        </div>
    </section>
   