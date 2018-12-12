<?php
  include('functions/connexion.php');
  // on cree la variable qui va recuperer les pages php
  $page =htmlentities($_GET['page']);

  include('functions/'.$page.'.func.php');
  //la fonction pour scanner le dossier pages et qui nous affiche un tableau
  $pages = scandir('pages');

  //on test si la page a ete trouvé
  if(!empty($page) && in_array($_GET['page'].".php",$pages)){
           $content = 'pages/'.$_GET['page'].".php";
  }else{
   header("Location:index.php?page=login");
  }
  //si l'utilisateur est connecté et veux acceder a la page login, il ne peut pas
  if(isset($_SESSION['username']) && $page != 'dashboard' && $page != 'logout'){
    header("Location:index.php?page=dashboard");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IT Chat</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/styleperso.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
            <?php
              include($content);
            ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/scriptloginhid.min.js"></script>
    <script src="js/customloginregister.min.js"></script>
    <script src="js/custommessage.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>