<?php 
        $data = new LivresController();
		$livres = $data->getForHome();
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
                 <div class="categ"> Categorie</div>
                <ul>
                     <?php foreach($categories as $categorie):?>
               
                    <a href="books?categorie=<?php  echo  $categorie['categorie'];?>">
                        <li> <?php  echo  $categorie['categorie'];?></li>
                    </a>
                    	<?php endforeach;?>

                  
                </ul>
            </div>











            <div class="zone">
                <div class="crs">
                    <!-- <img class="cov" src="image/horaires.png" alt=""> -->
                    <div class="container">

                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" style="HEIGHT: 322PX;">
                                <div class="item active">
                                    <img src="image/horaires.png" alt="horaires" style="width:100%;">
                                </div>

                                <div class="item">
                                    <img src="image/pub2.jfif" alt="PUP2" style="width:100%;">
                                </div>

                                <div class="item">
                                    <img src="image/PUB3.png" alt="New " style="width:100%;">
                                </div>
                                
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>


                </div>


                <div class="zone2">
                    <div class="catit">Les Nouveautés </div>

                    <div class="zone23">




<?php foreach($livres as $livre):?>

                        <div class="rof">
                        <a href="infobook?id_livre=<?php  echo  $livre['id_livre'];?>">
                            <div class="tag">Nouveau</div>
                            <div class="tag-side"><img src="image/tag.png"></div>
                            <img class="cov1" src="image/<?php  echo  $livre['image'];?>">
                            <hr>
                            <div class="titre"> <span><?php  echo  $livre['titre'];?></span></div>
                            <br>
                            </a>
                        </div>
<?php endforeach;?>
                        

















                    </div>




                </div>


            </div>







        </div>



    </section>



   