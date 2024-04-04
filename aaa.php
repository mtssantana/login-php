<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
</head>
<body>
<h2>Página do usuário</h2>
<form method="post" action="">
    <p>
        <label for="name">Nome</label><br>
        <input required type="text" id="name" name="name">
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
        <label for="endereco">Endereço</label><br>
        <input type="text" name="endereco" id="endereco" required>
    </p>
    <input type="submit" value="Enviar">
</form>
<div id="mensagemBoasVindas">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['name']) && !empty($_POST['sobrenome']) && !empty($_POST['data'])) {
            $name = $_POST['name'];
            $sobrenome = $_POST['sobrenome'];
            echo "Bem-vindo, $name!";
        }
    }
    ?>
</div>
</body>
</html>