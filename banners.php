<?php
session_start();
@$link=mysql_connect('localhost','root','');
    mysql_select_db("chatteit");


$sql= "SELECT * FROM users WHERE username != '{$_SESSION['username']}' ORDER BY etatuser DESC";
$result = mysql_query($sql, $link);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_assoc($result)) {
                                                                     echo '<div class="user-w">
                                                                <div class="avatar with-status status-green">';
                                                            
                                                                            if ($row["etatuser"] == "1") {
                                                                                    ?>
                                                                                    <!--<img src="images/connect.png">-->
                                                                            <?php
                                                                            }else{
                                                                                    ?>
                                                                                    <!--<img src="images/disconnect.png">-->
                                                                             <?PHP
                                                                            }
                                                                            ?>
                                                            <img alt="" src="<?PHP echo $row["imageuser"] ?>">
                                                            </div>
                                                            <div class="user-info">
                                                                <div class="user-date">12 min</div>
                                                                <style>
                                                            a:hover {
                                                                color: white;
                                                            }
                                                            .last-message:hover {
                                                                color: white;
                                                            }
                                                            </style>
                                                            <div class="user-name"> <a href="index.php?page=dashboard&&username=<?php echo $row["username"]?>"><strong><?php echo $row["firstname"]." ".$row["lastname"];?></strong></a></div>
                                                            <div class="last-message">What is going on, are we...</div>
                                                            </div>
                                                            </div>                                          
                                                                 <br>
                                                                 <?PHP
}
mysql_free_result($result);

?>
