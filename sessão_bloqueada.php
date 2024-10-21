<?php 
date_default_timezone_set('America/Sao_Paulo');
 session_start();

 $_SESSION['nome'] = $_POST['login'];
 $_SESSION['senha'] = $_POST['senha'];
 ?>

 <b> Funcionário: </b> <?php echo $_SESSION['nome'] ?>,  logado com sucesso. <br>
  <b> Data de conexão: </b> <?php echo date("d/m/Y")?> <br>
   <b> Hora de conexão: </b> <?php echo date("H:i:s") ?><br>

   <a href="sessão_verificasessão.php">Área de adiministrador</a>