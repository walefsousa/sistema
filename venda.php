<?php
    include_once('header.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Venda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

  <div class="container-vendas">
    <h1>Venda</h1>
      <label>Produto<label>
        <input type="search" class="input-buscar" placeholder="Pesquisar..." minlength="1" maxlength="55" required></input>
          <input type="submit" class="botao-buscar" name="btn-buscar" value="Buscar">
          <input type="submit" class="botao-buscar" name="btn-buscar" value="Adicionar">  
  </div>
</body>
</html>