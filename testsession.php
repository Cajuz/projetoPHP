<?php

 session_start();

$_SESSION['nome'] = "Adiministrador";

//Apaga a chave da sessão, nesse caso o 'nome'
//session_unset();

//Destroi toda a sessão
//session_destroy();

//Pega o id da sessão
// session_id()
?>


<h3>Sessão do Usuário</h3>
Bem vindo, Sr. <?php echo $_SESSION['nome']; ?>

<br> SID desta sessão é: <?php echo session_id(); ?>