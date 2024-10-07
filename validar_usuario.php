<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar Usuário</title>
</head>
<body>

<h1>Valindando Usuários</h1>

    <form action="recebe_usuario.php" method="post">
        <label for="usuario"></label>
             Digite seu email cadastrado 
            <br> <input type="email" name="email" id="email" value="" class="email" placeholder="Digite seu email aqui" maxlength="100" autofocus autocomplete="off">  <br><br>
            Digite a sua senha cadastrada
            <br> <input type="password" name="senha" id="senha" value="" class="senha" placeholder="Digite sua senha aqui" maxlength="20" autocomplete="off"> <br><br>
                 <input type="submit" name="Enviar" value="Validar"> 
                 <input type="reset" name="reset" value="Limpar">

</body>
</html>