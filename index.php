<?php
if (isset($_POST['user'])) {

    include('conexao.php');

    $login = $_POST['user'];
    $senha = $_POST['senha'];

    $sql_code = "SELECT * FROM logins WHERE usuario = '$login' LIMIT 1";
    $sql_exec = $mysqli->query($sql_code) or die($mysqli_connect_error);

    $usuario = $sql_exec->fetch_assoc();

    if (password_verify($senha, $usuario['senha'])) {

        // echo "<h3>Bem vindo, $login</h3>";
        header("Location: principal.php");  //redireciona o usuario para outra tela

    } else {

        echo "<h3 style=color:red>Usuario ou senha invalido!</h3>";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="#"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h1>Login</h1>
    <form action="" method="post">
        <p>
            <label>Usuário:</label>
            <input type="text" name="user"></input>
        </p>

        <p>
            <label>Senha:</label>
            <input type="password" name="senha"></input>
        </p>

        <p>
            <button type="submit"> Entrar </button>
        </p>

    </form>

</body>

</html>