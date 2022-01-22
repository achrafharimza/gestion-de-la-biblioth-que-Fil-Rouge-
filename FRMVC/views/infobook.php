 <?php 
 
        $data = new LivresController();
		$livresById = $data->getById();
        foreach( $livresById as $result )

        


?>
<section>
                <form action="books" method="GET">
            <div class="con1">
                <input type="text" class="ins" name="titre" placeholder="Rechercher un livre" required>
                <div class="search">
                    <!-- <img src="image/search.png"> -->
                    <button style="background-color: #810000;" name="search" ><i  class="fa fa-search"></i></button>
                </div>


            </div>
        </form>


        </div>
        <div class="con">
            <div class="catit">BIBLIOTHEQUE </div>
            <div class="infozone">



                <div class="rof">
                    <img class="covv" src="image/<?php  echo  $result['image'];?>">

                </div>


                <div class="inft">

                    <div class="in1">
                       

                        <div>TITRE :<span> <?php  echo  $result['titre'];?></span></div>
                        <div>AUTEUR :<span><?php  echo  $result['auteur'];?> </span></div>
                        <div>DATE :<span><?php  echo  $result['date_livre'];?></span></div>
                        <div>Categorie :<span><?php  echo  $result['categorie'];?></span></div>
                        <div>DESCRIPTION :<span> <?php  echo  $result['description'];?></span></div>
                         <!-- <div>qantite :<span> <?php  echo  $result['qantite'];?></span></div> -->
 
 
                               
                    </div>
                    <div class="hrdiv"></div>

                    <div class="in2">
                         <?php include('./views/includes/alerts.php');?>
                       <?php if (isset($_SESSION['logged']) ) { 

                           $data2 = new ReservationsController();
		                  $reservation = $data2->checkUserReservation();
                          
                          if (empty($reservation)) { 
                            if ($result['qantite']>0) {  ?>

                          <form action="action" method="POST">
                            <input type="hidden" name="id_livre" value="<?php  echo  $result['id_livre'];?>">
                           
                            <div class="frm">
                                <div class="form-group">
                                    <label>from</label>
                                    <input type="date" name="date_debut" class="form-control" min="">
                                </div>

                                <div class="form-group">
                                    <label>to</label>
                                    <input type="date" name="date_retour" class="form-control">
                                </div>
                            </div>
                           <button name="resevrver" class="bte">Emprunter</button>
                           </div>
                        </form>
<?php }else{

 ?>
 
                       <div class="msgzone">
                           
    <div class="alert alert-info text-center" style="width: 100%;">ouevre n'est pas disponible </div>
    </div>

<?php }
 }
else{

 ?>

                       <div class="msgzone">
                           
    <div class="alert alert-info text-center" style="width: 100%;">deja Emprunter</div>
    </div>

<?php }?>


<?php }
else{?>
<div class="msgzone">
    <div class="alert alert-info text-center" style="width: 100%;">CONNECTEZ-VOUS POUR Emprunter CET OUEVRE</div>
    </div>

  <?php }?>
                        


                     </div>

            </div>










        </div>







        </div>



    </section>