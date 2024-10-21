<?php 
date_default_timezone_set('America/Sao_Paulo');
 session_start();

 if($_SESSION['nome'] != "master"){

    session_destroy();

    header("location:sessão_bloqueada.php");

 }

    

 ?>

 <b> Acesso autorizado</b> 
