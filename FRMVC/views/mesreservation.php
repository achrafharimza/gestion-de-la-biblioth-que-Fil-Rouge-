 <?php 
 
        $data = new ReservationsController();
		$reservation = $data->getUserReservations();
        $data2 = new EmpruntsController();
        $emprunt = $data2->getUseremprunts();
       

?>
<section>
        <div class="con">

            <div class="reem">
                <a href="#" id="bres" class="active">

                    mes reservations
                </a>

                <a href="#" id="bem">

                    mes emprunts
                </a>
            </div>

            <div class="zones2">
                <!-- zone mes reservations -->
                <div class="allz2" id="mesreservations">
                    <div class="tit">
                        <h2>mes reservations</h2>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">livre</th>
                                <th scope="col">categorie</th>
                                <th scope="col">date de debut</th>
                                <th scope="col">date de retour</th>
                                <th scope="col">Annuler</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php include('./views/includes/alerts.php');?>
                            <?php foreach($reservation as $row):?>
                            <tr>
                                <th scope="row"><?php  echo  $row['id_reservation'];?></th>
                                <td> <a href="infobook?id_livre=<?php  echo  $row['id_livre'];?>" style="color: white;"><?php  echo  $row['titre'];?> </a> </td>
                                <td><?php  echo  $row['categorie'];?></td>
                                 <td><?php  echo  $row['date_debut'];?></td>
                                <td><?php  echo  $row['date_retour'];?></td>
                                <td> <a href="action?annuler=<?php  echo  $row['id_reservation'];?>" style="color: red;"><i class="fa fa-trash-o"></i><span>Annuler</span></a>
                            </tr>

                           <?php endforeach;?>
                       
                        </tbody>
                    </table>


                </div>

                <!-- zone mes emprunts -->
                <div class="allz2" id="mesemprunts">
                    <div class="tit">
                        <h2>mes emprunts</h2>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">livre</th>
                                <th scope="col">categorie</th>
                                <th scope="col">date de debut</th>
                                <th scope="col">date de retour</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                             <?php foreach($emprunt as $rows):?>
                            <tr>
                                <th scope="row"><?php  echo  $rows['id_emprunt'];?></th>
                                <td><?php  echo  $rows['titre'];?></td>
                                <td><?php  echo  $rows['categorie'];?></td>
                                 <td><?php  echo  $rows['date_debut'];?></td>
                                <td><?php  echo  $rows['date_retour'];?></td>
                            </tr>

                           <?php endforeach;?>
                       
                        </tbody>
                    </table>


                </div>


            </div>
        </div>
    </section>
  