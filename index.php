<?php



if (isset($_POST['user'])) {

    include('conexao.php');

    $login = $_POST['user'];
    $senha = $_POST['senha'];

    $sql_code = "SELECT * FROM logins WHERE usuario = '$login' LIMIT 1";
    $sql_exec = $mysqli->query($sql_code) or die($mysqli_connect_error);

    $usuario = $sql_exec->fetch_assoc();

    date_default_timezone_set('America/Sao_Paulo');
    $dia = date('d/m/y' .' - ' . 'H:i:s');

    if (password_verify($senha, $usuario['senha'])) {
        
        $sql_code = "INSERT INTO register(reg, dia) VALUES ('$login', '$dia')";
        $sql_exec = $mysqli->query($sql_code) or die($mysqli_connect_error);
        
        //echo "<h3>Bem vindo, $login</h3>";
        header("Location: principal.php");  //redireciona o usuario para outra tela


    } else { ?>
        <h3>Senha ou usuario invalido!!!</h3>
     <?php   
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
   
</head>

<body>
    
    <div class="div-log">    
        <img src="images/login1.png" alt="" class="img-login">
        <form action="" method="post">
        
            <div class="input1">            
                <label class="label">Usuário:</label><br>
                <input class="input" type="text" name="user" placeholder="login" minlength="1" maxlength="10" required></input>
            </div>        
            <div class="input2">     
                <label class="label">Senha:  </label><br>
                <input class="input" type="password" name="senha" placeholder="****" minlength="4" maxlength="8" required></input>
            </div>

            <div class="input3">
                <input class="botao" type="submit" value="Entrar"> 
            </div>
            <div class="input4">
                <a href="#" class="esq" onclick="alert('Entre em contato com o administrado para relatar a perda de acesso!')">Esqueceu sua senha ?</a>
            </div>
        </form>
    </div>
</body>

</html>