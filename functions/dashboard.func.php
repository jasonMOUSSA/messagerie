<?php
         //function recuperation info fournisseur
            function info_recuper_lister_user(){
             $infos = array();
             $query = mysql_query("SELECT * FROM users WHERE username != '{$_SESSION['username']}' ORDER BY etatuser DESC");
             while($rows = mysql_fetch_assoc($query)){
                 $infos[]=$rows;
             }
             return $infos;
            }

?>
