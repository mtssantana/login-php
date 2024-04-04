<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    
    <h2>Página do usuário</h2>
</head>
<body>
<form method="post" action="">
    <p>
    <label for="name">Nome</label><br>
    <input required type="text" id="name" name="nome">
    </p>
    <p>
        <label for="sobrenome">Sobrenome</label><br>
        <input type="text" name="sobrenome" id="sobrenome" required>
    </p>
    <p>
    <label for="data">Data de Nascimento</label><br>
    <input type="date" id="data" name="data" required>
    </p>   
  
    <p>
    <label for="Endereço">Endreço</label><br>
    <input type="text" name="endreço" id="endreço" required>
    </p>
    <input type="submit" value="Enviar" name="Enviar" placeholder="enviar">

<?php


if (empty($_POST["name"]) ||(empty($_POST["sobrenome"])) ) {
    echo "Digite seu nome e sobrenome";
}  else { 
    echo "Bem-Vindo";


}
?>
 

</body>
</html>