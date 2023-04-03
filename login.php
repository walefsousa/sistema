<?php
if (isset($_POST['usuario'])) {

  include('conexao.php');

  $login = $_POST['usuario'];
  $senha = $_POST['senha'];

  $sql_code = "SELECT * FROM logins WHERE usuario = '$login' LIMIT 1";
  $sql_exec = $conn->query($sql_code) or die($mysqli_connect_error);

  $usuario = $sql_exec->fetch_assoc();

}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

</head>

<body>
    <h1>Login</h1>
    <form action="" method="post">
        <p>
            <label>Usuário:</label>
            <input type="text" name="login"></input>
        </p>

        <p>
            <label>Senha:</label>
            <input type="password" name="senha"></input>
        </p>

        <p>
            <button type="submit"> Entrar </button>
        </p>

        <?php
        if (password_verify($senha, $usuario['senha'])) {

            echo "<h3>Bem vindo, $login</h3>";
            header("Location: principal.php");  //redireciona o usuario para outra tela

        } else {

            echo "<h3>Usuario ou senha invalido!</h3>";
        } ?>

    </form>
</body>

</html>