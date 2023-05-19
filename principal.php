

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Tela principal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/principal.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

  <div class="sidenav">
    <a href="#">Inicio<i class="fa fa-home" ></i></a>
    <a href="venda.php">Venda<i class="fa fa-shopping-cart" ></i></a>
    <a href="estoque.php">Estoque<i class="fa fa-database" ></i></a>
    <a href="cad_produtos.php">Cadastro<i class="fa fa-plus-circle" ></i></a>
    <a href="estatistica.php">Estatisticas<i class="fa fa-bar-chart" ></i></a>
    <a href="configuracao.php">Configurações<i class="fa fa-cog" ></i></a>
    <a href="ajuda.php">Ajuda<i class="fa fa-info-circle" ></i></a>
    <a href="login.php">Sair<i class="fa fa-sign-out" ></i></a>
  </div>

  <div class="content">
    <h2>Tela principal</h2>
    <?php
      include('conexao.php');

      $sql_code = "SELECT reg, dia FROM register ORDER BY id DESC LIMIT 1;";
      $sql_exec = $mysqli->query($sql_code) or die($mysqli_connect_error);

      $usuario = $sql_exec->fetch_assoc();
  
    ?>   
    <p  class="p-nome">Bem vindo <?= $string = implode(" - " , $usuario); ?></p>


  </div>

</body>

</html>