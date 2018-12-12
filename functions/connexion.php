<?php
session_start(); // ready to go!

$now = time();
if (isset($_SESSION['discard_after']) && $now > $_SESSION['discard_after']) {
    // this session has worn out its welcome; kill it and start a brand new one
    session_unset();
    session_destroy();
    session_start();
}

// either new or old, it should live at most for another hour
$_SESSION['discard_after'] = $now + 20;
//connection a la base des donnée
@mysql_connect('127.0.0.1','root','') or die('erreur de connexion');
mysql_select_db('chatteit') or die('la base des données n\'existe pas ou à été supprimée ');
mysql_query('SET NAMES utf8');
?>