 <?php 
 
        $data = new LivresController();
		
if (isset($_GET['categorie'])) {
	$livresByCat = $data->getByCategories();
    $CT=$_GET["categorie"];
}
elseif (isset($_GET['titre'])) {
	$livresByCat = $data->getBySearch();
    $CT= "Search for : ". $_GET["titre"] ;
   
}
        $categories  = $data->getAllCategories();

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
        <div class="con">

            <div class="category">
                <div class="categ"> Categorie </div>
                <ul>
                    <?php foreach($categories as $categorie):?>
               
                    <a href="books?categorie=<?php  echo  $categorie['categorie'];?>">
                        <li> <?php  echo  $categorie['categorie'];?></li>
                    </a>
                    	<?php endforeach;?>
              
                </ul>
            </div>
            <div class="zone">



                <div class="zone2">


                    <div class="catit"> <?php  echo  $CT;?> </div>


                    <div class="zone23">


 



 
<?php if (empty($livresByCat)) { ?>


<div class="rof1">
    <div class="alert alert-info">Aucun oeuvre a ce titre</div>

                        </div>



<?php }
else{

 foreach($livresByCat as $row): ?>

                        <div class="rof">
                            <a href="infobook?id_livre=<?php  echo  $row['id_livre'];?>">
                            <img class="cov" src="image/<?php  echo  $row['image'];?>">
                            <hr>
                            <div class="titre"> <span><?php  echo  $row['titre'];?></span></div>
                            <br>
                            </a>
                        </div>

<?php endforeach;}?>
 
               



                    





                    </div>




                </div>


            </div>







        </div>



    </section>
  