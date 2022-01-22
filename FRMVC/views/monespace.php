<?php 
 
        $data = new UsersController();
		$user = $data->getOneUser();
        foreach( $user as $row )
       

?>
<section>

        <div class="con">
            <div class="sidebar">

                <div class="pic">
                    <img src="image/<?php  echo  $row['adherent_image'];?>">
                    <h4><?php  echo  $row['prenom']," ",$row['nom'];?></h4>
                </div>

                <a href="#zones" id="bac" class="active">
                    <i class="fa fa-home"></i>
                    Account
                </a>

                <a href="#zones" id="bpas">
                    <i class="fa fa-key"></i>
                    Password
                </a>
                <a href="#zones" id="bim">
                    <i class="fa fa-image"></i>
                    photo de profile
                </a>

           

            </div>
            <div class="zones" id="zones">

                <!-- zone Account -->
                <div class="allz" id="ac">
                    <div class="tit">
                        <h2>Account Settings</h2>

                        
                    </div>
                    <form action="action"  method="POST">
                        <?php include('./views/includes/alerts.php');?>
                    <div class="zf">

                        <div class="form-group">
                            <label>prenom</label>
                            <input type="text" name="prenom" class="form-control" value="<?php  echo  $row['prenom'];?>"required>
                        </div>

                        <div class="form-group">
                            <label>nom</label>
                            <input type="text" name="nom" class="form-control" value="<?php  echo  $row['nom'];?>"required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="<?php  echo  $row['email'];?>"required>
                        </div>

                        <div class="form-group">
                            <label>Phone number</label>
                            <input type="text" name="phone" class="form-control" value="<?php  echo  $row['phone'];?>"required>
                        </div>

                        <div class="form-group">
                            <label>cni</label>
                            <input type="text" name="cni" class="form-control" value="<?php  echo  $row['cni'];?>"required>
                        </div>

                        <div class="form-group">
                            <label>code_inscription</label>
                            <input type="text" name="code_inscription" class="form-control" value="<?php  echo  $row['code_inscription'];?>"readonly>
                        </div>



                    </div>

                    <div class="upd"><button type="submit" name="update"><i class="fa fa-edit"></i>update</button></div>
                    </form>
                </div>

                <!-- zone password -->

                <div class="allz" id="pas">
                    <div class="tit">
                        <h2>Password</h2>
                    </div>
                    <form  action="action" method="POST">
                        <?php include('./views/includes/alerts.php');?>
                    <div class="zp">
                       
                        <div class="newp">
                            <div class="form-group">
                                <label>New password</label>
                                <input type="password" name="psd1" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Confirm new password</label>
                                <input type="password" name="psd2"  class="form-control" required>
                            </div>

                        </div>
                         <div class="newp">
                            <div class="form-group">
                                <label> old password</label>
                                <input type="password" name="psd"  class="form-control" required >
                            </div>
                        </div>
                    </div>
                    <div class="upd"><button type="submit" name="update"><i class="fa fa-edit"></i>update</button></div>
                    </form>
                </div>





   <div class="allz" id="im">
                    <div class="tit">
                        <h2>photo de profile</h2>
                    </div>
                       <form action="action" method="POST" enctype="multipart/form-data">
                 <?php include('./views/includes/alerts.php');?>

                    <div class="form-group">
                        <label>photo de profile</label>
                        <input type="file" name="image" class="form-control"  placeholder="image" required>
                    </div>


                    <div style="width: 100%; text-align: center;">
                        <button type="submit" name="update" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add
                            New</button>
                    </div>

                </form>
                </div>







            </div>


















        </div>



    </section>
    