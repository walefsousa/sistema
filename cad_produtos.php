<?php
include_once('header.php');

if (isset($_POST['codigo1'])) {

    include('conexao.php');
  
    $codigo1 = $_POST['codigo1'];
    $nome1 = $_POST['nome1'];
    $preco_venda1 = $_POST['preco_venda1'];
    $preco_custo1 = $_POST['preco_custo1'];
    $estoque_min1 = $_POST['estoque_min1'];
    $estoque_atual1 = $_POST['estoque_atual1'];
    $qtd1 = $_POST['qtd1'];
   //$img = $_POST['images'];

    $sql_code = "INSERT INTO estoque(codigo, nome, preco_venda, preco_custo, estoque_minimo, estoque_atual, qtd) 
            VALUES ('$codigo1','$nome1','$preco_venda1','$preco_custo1','$estoque_min1','$estoque_atual1','$qtd1')";

    $mysqli->query($sql_code) or die($mysqli_connect_error);

} //end if
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Produtos</title>

</head>

<body>
    <h1 class="titulo-abas">Cadastro de produtos</h1>
    <form action="" method="post">
        <div class="input-1">
            <label class="label-abas">Código/Código de barras</label>
            <input class="cad-input" type="text" name="codigo1"minlength="1" maxlength="30" required >
            <label class="label-abas">Descrição/Nome</label>
            <input class="cad-input" type="text" name="nome1" minlength="1" maxlength="30" required>
          
        </div>

        <div class="input-2">
            <label class="label-abas">Preço de venda</label>
            <input class="cad-input" type="text" name="preco_venda1" minlength="1" maxlength="30" required>
            <label class="label-abas">Preço de Custo</label>
            <input class="cad-input" type="text" name="preco_custo1" minlength="1" maxlength="30" required>
            <label class="label-abas">Lucro %</label>
            <input class="cad-input" type="text" name="" minlength="1" maxlength="30" required>
        </div>

        <div class="input-3"> 
            <label class="label-abas">Estoque minimo</label>
            <input class="cad-input" type="text" name="estoque_min1" minlength="1" maxlength="30" required>
            <label class="label-abas">Estoque atual</label>
            <input class="cad-input" type="text" name="estoque_atual1"minlength="1" maxlength="30" required>
            <label class="label-abas">Quantidade</label>
            <input class="cad-input" type="number" name="qtd1"minlength="1" maxlength="30" required>
        </div>
        <div class="input-4">
            <input type="file" 
                multiple accept="image/png, image/jpeg, image/jpg" 
                id="image" 
                name="images" 
            >
        </div>

        <div class="input-5">
            <input class="botao-cadastrar" type="submit" value="Cadastrar"> 
            <input class="botao-alterar" type="submit" value="Alterar"> 
            <input class="botao-limpar" type="reset" value="Limpar"> 
            <input class="botao-cancelar" type="reset" value="Cancelar"> 
        </div>
    </form>
</body>
</html>