
        <?php
         //function recuperation info fournisseur
            function info_recuper_user_connect(){
             $infos = array();
             $query = mysql_query("SELECT * FROM users WHERE username = '{$_SESSION['username']}'");
             while($rows = mysql_fetch_assoc($query)){
                 $infos[]=$rows;
             }
             return $infos;
            }
            $infos = info_recuper_user_connect();
            foreach ($infos as $info) {
                $_SESSION['firstname'] = $info['firstname'];
                $_SESSION['lastname'] = $info['lastname'];
                $_SESSION['priority'] = $info['priority'];
            }
        ?>
   <div style="padding:20px; padding-top:40px; text-align:right;">
	<strong><img src="images/connect.png"> <span style="color:#fff"> Bienvenue </span> <a href="" style="text-decoration:none; color:#3CB371;"><?php echo $_SESSION['firstname'].' '.$_SESSION['lastname'] ?></a> |
	<a href="index.php?page=logout&&usersession=<?php echo $_SESSION['username']?>" style="text-decoration:none; color:#fff;"><i class="glyphicon glyphicon-log-out"></i></a> </strong>
   </div>