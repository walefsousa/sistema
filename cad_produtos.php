<?php
include_once('header.php');

if (isset($_POST['codigo'])) {
    
    include('conexao.php');
    

    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $preco_venda = $_POST['preco_venda'];
    $preco_custo = $_POST['preco_custo'];
    $estoque_min = $_POST['estoque_min'];
    $estoque_atual = $_POST['estoque_atual'];
    $qtd = $_POST['qtd'];
   //$img = $_POST['images'];

    $sql_code = "INSERT INTO estoque(codigo, nome, preco_venda, preco_custo, estoque_minimo, estoque_atual, qtd) 
            VALUES ('$codigo','$nome', '$preco_venda', '$preco_custo' , '$estoque_min',' $estoque_atual',' $qtd')";

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
    <h1 class="titulo-abas">Cadastro de produtos</h1><br>
    <form action="" method="post">
        <div class="input-1">
            <label class="label-abas">Código/Código de barras</label>
            <input class="cad-input" type="text" name="codigo"minlength="1" maxlength="30" required >
            <label class="label-abas">Descrição/Nome</label>
            <input class="cad-input" type="text" name="nome" minlength="1" maxlength="30" required>
          
        </div>

        <div class="input-2">
            <label class="label-abas">Preço de venda</label>
            <input class="cad-input" type="text" name="preco_venda" minlength="1" maxlength="30" required>
            <label class="label-abas">Preço de Custo</label>
            <input class="cad-input" type="text" name="preco_custo" minlength="1" maxlength="30" required>
            <label class="label-abas">Lucro %</label>
            <input class="cad-input" type="text" name="" minlength="1" maxlength="30" required>
        </div>

        <div class="input-3"> 
            <label class="label-abas">Estoque minimo</label>
            <input class="cad-input" type="text" name="estoque_min" minlength="1" maxlength="30" required>
            <label class="label-abas">Estoque atual</label>
            <input class="cad-input" type="text" name="estoque_atual"minlength="1" maxlength="30" required>
            <label class="label-abas">Quantidade</label>
            <input class="cad-input" type="number" name="qtd"minlength="1" maxlength="30" required>
        </div>
        <div class="input-4">
            <input type="file" 
                multiple accept="image/png, image/jpeg, image/jpg" 
                id="image" 
                name="images" 
                required>
        </div>

        <div class="input-5">
            <input class="botao-cadastrar" type="submit" value="Cadastrar"> 
            <input class="botao-alterar" type="submit" value="Alterar"> 
            <input class="botao-limpar" type="submit" value="Limpar"> 
            <input class="botao-cancelar" type="submit" value="Cancelar"> 
        </div>
    </form>
</body>
</html>