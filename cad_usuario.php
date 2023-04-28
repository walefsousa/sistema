<?php
if (isset($_POST['login'])) {
    include('conexao.php');

    $login = $_POST['login'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);


    $sql_code = "INSERT INTO logins(login, senha) 
            VALUES ('$login','$senha')";

    $conn->query($sql_code) or die($mysqli_connect_error);
} //end if
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuario</title>

</head>

<body>
    <form action="" method="post">
        <p>
            <label>Usuário:</label>
            <input type="text" name="login"></input><br>
        </p>

        <p>
            <label>Senha:</label>
            <input type="text" name="senha"></input></br>
        </p>

        <p>
            <button type="submit"> Cadastrar </button>
        </p>

    </form>
</body>

</html>