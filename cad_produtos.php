<?php
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
   
<input type="checkbox" name="vehicle1" >
<label> Produto simples</label>
<input type="checkbox" name="vehicle2">
<label> Serviço</label>
<input type="checkbox" name="vehicle3" >
<label > Reposição de mercadoria</label><br>    


    <form action="" method="post">
        <p>
            <label>Código/Código de barras</label>
            <input type="text" name="nome"></input>
            <label>Produto</label>
            <input type="text" name="nome"></input>
        </p><br>

        <p>
        <label>Quantidade</label>
            <input type="text" name="qtd"></input>
            <label>Descrição/Nome</label>
            <input type="text" name=""></input>
        </p><br>

        <p>
            <label>Preço de venda</label>
            <input type="text" name="preco"></input>
            <label>Preço de Custo</label>
            <input type="text" name=""></input>
            <label>Lucro %</label>
            <input type="text" name=""></input>
        </p><br>

        <label>Estoque minimo</label>
            <input type="text" name=""></input>
            <label>Estoque atual</label>
            <input type="text" name=""></input>
        </p><br>


        <p>
            <button type="submit"> Cadastrar </button>
            <button type="submit"> Voltar </button>
        </p>
        

    </form>
</body>

</html>