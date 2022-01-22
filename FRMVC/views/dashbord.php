<?php 
 
        $data = new UsersController();
		$users = $data->getAllUsers();

        $data2 = new ReservationsController();
		$reservations = $data2->getAllReservations();

         $data3 = new EmpruntsController();
		$emprunts = $data3->getAllEmprunts();
       
        $data4 = new LivresController();
		$livres = $data4->getAllLivres();
        
        
		$inscriptions = $data->getinscriptions();
?>
<html>

<head>
    <title>
        GESTION DE BIBLIOTHEQUE
    </title>
    <link rel="stylesheet" type="text/css" href="style/stl.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="style/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="style/JQ.js"></script>

    

</head>


<body>

    <div class="sidebard">
        <div class="sidebar-brand">
            <h2><span><img src="image/logo.png"></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="#" class="active" id="ahome"><i class="fa fa-home"></i><span>Home</span></a>
                </li>
                <li>
                    <a href="#Clients" id="aClients"><i class="fa fa-users"></i><span>Clients</span></a>
                </li>
                <li>
                    <a href="#" id="ademmande"><i class="fa fa-files-o"></i><span>demmande</span></a>
                </li>
                <li>
                    <a href="#" id="abooks"><i class="fa fa-book"></i><span>books</span></a>
                </li>
                  <li>
                    <a href="#" id="ainscription"><i class="fa fa-money"></i><span>inscription</span></a>
                </li>
                <li><a href="action?logout"><i class="fa fa-sign-out"></i></a></li>

            </ul>
        </div>
    </div>
    <div class="contt">
        <div class="con" id="home">
           
            <h1>welcome Administrator</h1>
            <?php include('./views/includes/alerts.php');?>
         
            <img src="image/homepage.jpg" alt="" srcset="">
                       

        </div>
        <div class="con" id="Clients">
               <?php include('./views/includes/alerts.php');?>

            <h1>Clients</h1>
            <div style="border-bottom: 1PX SOLID;">
 <input class="Search" type="text" id="myInput"  placeholder="Search for ..." title="Type in a name">
</div>
            <table class="table table-dark" style="color: white;">
                <thead>
                    <tr>
                        <th scope="col">client ID</th>
                        <th scope="col">nom</th>
                        <th scope="col">prenom</th>
                        <th scope="col">email</th>
                        <th scope="col">phone</th>
                        <th scope="col">code de registration</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody  id="myTable">
                    <?php foreach($users as $row):?>
                    <tr>
                        <th scope="row"><?php  echo  $row['id_adherent'];?></th>
                        <td><?php  echo  $row['prenom'];?></td>
                        <td><?php  echo  $row['nom'];?></td>
                        <td><?php  echo  $row['email'];?></td>
                        <td><?php  echo  $row['phone'];?></td>
                        <td><?php  echo  $row['code_inscription'];?></td>
                        <td> <a href="action?supprimerAD=<?php  echo  $row['id_adherent'];?>" style="color: red;"><i class="fa fa-trash-o"></i><span>Supprimer</span></a>
                        </td>

                    </tr>
                   <?php endforeach;?>
                </tbody>
            </table>
        </div>
        <div class="con" id="demmande">
            <h1>reservations</h1>
                        <div style="border-bottom: 1PX SOLID;">
 <input class="Search" type="text" id="myInputR"  placeholder="Search for ..." title="Type in a name">
</div>
            <?php include('./views/includes/alerts.php');?>
            <table class="table table-dark" style="color: white;">
                <thead>
                    <tr>
                        <th scope="col">reservation ID</th>
                        <th scope="col">adhérent</th>
                        <th scope="col">livre</th>
                        <th scope="col">date_debut</th>
                        <th scope="col">date_retour</th>
                        <th scope="col">Accepter</th>
                        <th scope="col">Refuser</th>
                    </tr>
                </thead>
                <tbody  id="myTableR">
                   <?php foreach($reservations as $row):?>
                    <tr>
                        <th scope="row"><?php  echo  $row['id_reservation'];?></th>
                        <td><?php  echo  $row['prenom']," ",$row['nom'];?></td>
                        <td><?php  echo  $row['titre'];?></td>
                        <td><?php  echo  $row['date_debut'];?></td>
                         <td><?php  echo  $row['date_retour'];?></td>
                        <td> <a href="action?accepter=<?php  echo  $row['id_reservation'];?>" style="color: green;"><i class="fa fa-check-square"></i><span>Accepter</span></a></td>
                        <td>
                            <a href="action?refuser=<?php  echo  $row['id_reservation'];?>" style="color: red;"><i class="fa fa-times"></i><span>Refuser</span></a>
                        </td>
                    </tr>
                 <?php endforeach;?>
                   
                </tbody>
            </table>
            
            <h1 style="margin-top: 150px;">emprunt</h1>
             <div style="border-bottom: 1PX SOLID;">
 <input class="Search" type="text" id="myInputE"  placeholder="Search for ..." title="Type in a name">
</div>
            <?php include('./views/includes/alerts.php');?>
            <table class="table table-dark" style="color: white;">
                <thead>
                    <tr>
                        <th scope="col">emprunt ID</th>
                        <th scope="col">adhérent</th>
                        <th scope="col">livre</th>
                        <th scope="col">date_debut</th>
                        <th scope="col">date_retour</th>
                        <th scope="col">terminer</th>
                    </tr>
                </thead>
                <tbody  id="myTableE">
                   <?php foreach($emprunts as $row):?>
                    <tr>
                        <th scope="row"><?php  echo  $row['id_emprunt'];?></th>
                        <td><?php  echo  $row['prenom']," ",$row['nom'];?></td>
                        <td><?php  echo  $row['titre'];?></td>
                        <td><?php  echo  $row['date_debut'];?></td>
                         <td><?php  echo  $row['date_retour'];?></td>
                        <td> <a href="action?terminer=<?php  echo  $row['id_emprunt'];?>&id_livre=<?php  echo  $row['id_livre'];?>" style="color: green;"><i class="fa fa-check-square"></i><span>terminer</span></a></td>
                       
                    </tr>
                  <?php endforeach;?>
                   
                </tbody>
            </table>
        </div>
        <div class="con" id="books">
            <h1>Books</h1>
        <div class="zfa">
                <form action="action" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>titre</label>
                        <input type="text" class="form-control" name="titre" placeholder="titre">
                    </div>

                    <div class="form-group">
                        <label>auteur</label>
                        <input type="text" class="form-control" name="auteur" placeholder="auteur">
                    </div>
                    <div class="form-group">
                        <label>date_livre</label>
                        <input type="date" class="form-control" name="date_livre" placeholder="date_livre">
                    </div>

                    <div class="form-group">
                        <label>categorie</label>
                        <input type="text" class="form-control" name="categorie" placeholder="categorie">
                    </div>

                    <div class="form-group">
                        <label>description</label>
                        <input type="text" class="form-control" name="description" placeholder="description">
                    </div>

                    <div class="form-group">
                        <label>qantite</label>
                        <input type="number" class="form-control" name="qantite" placeholder="qantite">
                    </div>
                    <div class="form-group">
                        <label>cover</label>
                        <input type="file" name="image" class="form-control" name="image" placeholder="image">
                    </div>


                    <div style="width: 100%; text-align: center;">
                        <button type="submit" name="addbook" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add
                            New</button>
                    </div>

                </form>
            
         </div>
       
         <h1 >List of Books</h1>
               <div style="border-bottom: 1PX SOLID;">
 <input class="Search" type="text" id="myInputB"  placeholder="Search for ..." title="Type in a name">
</div>
       
         
         <table class="table table-dark" style="color: white;">
                <thead>
                    <tr>
                        <th scope="col">livre ID</th>
                        <th scope="col">titre</th>
                        <th scope="col">AUTEUR</th>
                        <th scope="col">DATE</th>
                        <th scope="col ">GENRE</th>
                        <th scope="col ">DESCRIPTION</th>
                        <th scope="col">qantité</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                 <tbody  id="myTableB">
                  <?php foreach($livres as $row):?>
                    <tr>
                        <th scope="row"><?php  echo  $row['id_livre'];?></th>
                        <td><?php  echo  $row['titre'];?></td>
                        <td><?php  echo  $row['auteur'];?></td>
                         <td><?php  echo  $row['date_livre'];?></td>
                         <td><?php  echo  $row['categorie'];?></td>
                         <td><?php  echo  $row['description'];?></td>
                        <td><?php  echo  $row['qantite'];?></td>
                        <td> <a href="action?supprimerB=<?php  echo  $row['id_livre'];?>" style="color: red;"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                  <?php endforeach;?>

                </tbody>
            </table>       
            
        </div>


        <div class="con" id="inscription">
            <h1>inscription</h1>
          <div class="zfa">
                <form action="action" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>cni</label>
                        <input type="text" class="form-control" name="cni" placeholder="cni">
                    </div>

                    <div class="form-group">
                        <label>à partir de</label>
                        <input type="date" class="form-control" name="debut" placeholder="à partir de">
                    </div>
                    <div class="form-group">
                        <label>jusqu'à</label>
                        <input type="date" class="form-control" name="fin" placeholder="jusqu'à">
                    </div>

                    <div style="width: 100%; text-align: center;">
                        <button type="submit" name="addinsc" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add
                            New</button>
                    </div>

                </form>
            
         </div>
         <h1 >Les inscriptions</h1>
                 <div style="border-bottom: 1PX SOLID;">
 <input class="Search" type="text" id="myInputI"  placeholder="Search for ..." title="Type in a name">
</div>
       
         
         <table class="table table-dark" style="color: white;" >
                <thead>
                    <tr>
                        <th scope="col"> ID</th>
                        <th scope="col">cni</th>
                        <th scope="col ">code_inscription</th>
                        <th scope="col">à partir de</th>
                        <th scope="col">jusqu'à</th>
                        
                        
                        <th scope="col">imprimer</th>
                    </tr>
                </thead>
                 <tbody  id="myTableI">
                  <?php foreach($inscriptions as $row):?>
                    <tr >
                        <th scope="row"><?php  echo  $row['id'];?></th>
                        <td><?php  echo  $row['cni'];?></td>
                        <td><?php  echo  $row['code_inscription'];?></td>
                        <td><?php  echo  $row['debut'];?></td>
                         <td><?php  echo  $row['fin'];?></td>
                         
                        <td> <a href="recu?imprimer=<?php  echo  $row['id'];?>"  target="blank" ><i class="fa fa-PRINT"></i></a>
                        </td>
                    </tr>
                    
                  <?php endforeach;?>

                </tbody>
            </table>       
            
        </div>

    </div>

 
<script>
        $(document).ready(function () {
            $('.menu').click(function () {
                $('nav').slideToggle();
            });

            $(window).resize(function () {
                if ($(window).width() > 768) {
                    $('nav').show();
                } else {
                    $('nav').hide();
                }
            });
            $(".con").hide();
            $("#home").show();
           
             
        });
        $("#ahome").click(function () {
            $(".con").hide();
            $("#home").show();
            $("a").removeClass("active");
            $("#ahome").addClass("active");

        });
        $("#aClients").click(function () {
            $(".con").hide();
            $("#Clients").show();
            $("a").removeClass("active");
            $("#aClients").addClass("active");

        });
        $("#ademmande").click(function () {
            $(".con").hide();
            $("#demmande").show();
            $("a").removeClass("active");
            $("#ademmande").addClass("active");

        });

        $("#abooks").click(function set() {
            $(".con").hide();
            $("#books").show();
            $("a").removeClass("active");
            $("#abooks").addClass("active");

        });

           $("#ainscription").click(function () {
            $(".con").hide();
            $("#inscription").show();
            $("a").removeClass("active");
            $("#ainscription").addClass("active");

        });

//         function myFunction() {
//   var input, filter, table, tr, td, i, txtValue;
//   input = document.getElementById("myInput");
//   filter = input.value.toUpperCase();
//   table = document.getElementById("myTable");
//   tr = table.getElementsByTagName("tr");
//   for (i = 0; i < tr.length; i++) {
     
//     td = tr[i].getElementsByTagName("td")[0] ;
   

//     if (td) {
//       txtValue = td.textContent || td.innerText;
//       if (txtValue.toUpperCase().indexOf(filter) > -1) {
//         tr[i].style.display = "";
//       } else {
//         tr[i].style.display = "none";
//       }
//     }       
//   }
  
// }
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

  $("#myInputR").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTableR tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

   $("#myInputE").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTableE tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

   $("#myInputB").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTableB tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

   $("#myInputI").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTableI tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  
});

    </script>
</body>

</html>