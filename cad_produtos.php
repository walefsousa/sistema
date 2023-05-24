<?php
include_once('header.php');

if (isset($_POST['nome'])) {
    
    include('conexao.php');
    

    $nome = $_POST['nome'];
    $qtd = $_POST['qtd'];
    $preco = $_POST['preco'];

    $sql_code = "INSERT INTO estoque(nome, qtd, preco) 
            VALUES ('$nome','$qtd', '$preco')";

    $mysqli->query($sql_code) or die($mysqli_connect_error);

} //end if
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>

</head>

<body>
    <h1 class="cad-h1">Cadastro de produtos</h1><br>
    <form action="" method="post">
        <p>
            <label class="cad-label">Código/Código de barras</label>
            <input class="cad-input" type="text" name="nome" >
            <label class="cad-label">Descrição/Nome</label>
            <input class="cad-input" type="text" name="">
          
        </p><br>

        <p>
            <label class="cad-label">Preço de venda</label>
            <input class="cad-input" type="text" name="preco">
            <label class="cad-label">Preço de Custo</label>
            <input class="cad-input" type="text" name="">
            <label class="cad-label">Lucro %</label>
            <input class="cad-input" type="text" name="">
        </p><br>

        <p> 
            <label class="cad-label">Estoque minimo</label>
            <input class="cad-input" type="text" name="">
            <label class="cad-label">Estoque atual</label>
            <input class="cad-input" type="text" name="">
            <label class="cad-label">Quantidade</label>
            <input class="cad-input" type="text" name="qtd">
        </p><br>


        <p>
            <input class="botao-cadastrar" type="submit" value="Cadastrar"> 
            <input class="botao-alterar" type="submit" value="Alterar"> 
            <input class="botao-limpar" type="submit" value="Limpar"> 
            <input class="botao-cancelar" type="submit" value="Cancelar"> 
        </p>
        

    </form>
</body>

</html>