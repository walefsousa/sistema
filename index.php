<?php



if (isset($_POST['user'])) {

    include('conexao.php');

    $login = $_POST['user'];
    $senha = $_POST['senha'];

    $sql_code = "SELECT * FROM logins WHERE usuario = '$login' LIMIT 1";
    $sql_exec = $mysqli->query($sql_code) or die($mysqli_connect_error);

    $usuario = $sql_exec->fetch_assoc();
    
    $dia = '24/12/2023';

    if (password_verify($senha, $usuario['senha'])) {
        
        $sql_code = "INSERT INTO register(reg, dia) VALUES ('$login', '$dia')";
        $sql_exec = $mysqli->query($sql_code) or die($mysqli_connect_error);
        
        //echo "<h3>Bem vindo, $login</h3>";
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
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    
    <div class="div-log">
    
    <img src="images/login1.png" alt="" class="img-login">
    <form action="" method="post">
        <label class="label">Usuário:</label>
        <p>            
            <input class="input" type="text" name="user" placeholder="login" minlength="1" maxlength="10" required></input>
        </p>

        <label class="label">Senha:  </label>
        <p>
            
            <input class="input" type="password" name="senha" placeholder="****" minlength="4" maxlength="8" required></input>
        </p>

        <p>
            <input class="botao" type="submit" value="Entrar"> 
            <a href="#" class="esq" onclick="alert('Entre em contato com o administrado para relatar a perda de acesso!')">Esqueceu sua senha ?</a>
        </p>
            
    </form>

    </div>

</body>

</html>