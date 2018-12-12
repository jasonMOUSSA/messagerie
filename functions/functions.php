<?php
                                                        $infos = info_recuper_lister_user();
                                                        foreach ($infos as $info) {
                                                            ?>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <?php
                                                                            if ($info['etatuser'] == '1') {
                                                                                ?>
                                                                                    <img src="images/connect.png">
                                                                                <?php
                                                                            }else{
                                                                                ?>
                                                                                    <img src="images/disconnect.png">
                                                                                <?php
                                                                            }
                                                                        ?>
                                                                    </td>
                                                                    <td><img src="<?php echo $info['imageuser']?>" width="30" style="border-radius:50%;"></td>
                                                                    <td><a href="index.php?page=dashboard&&username=<?php echo $info['username']?>" style="text-decoration:none"><strong><?php echo $info['firstname'].' '.$info['lastname'];?></strong></a></td>
                                                                </tr>
                                                            <?php
                                                        }
                                                 ?>