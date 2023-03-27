<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Login</title>
</head>

<body>
   
<h3>LOGO</h3>

<div>
  <form action="/action_page.php">

  <p><label >Login</label>
    <input type="text" name="login" placeholder="Login"></p>

    <p><label >Senha</label>
    <input type="password" name="senha" placeholder="Password"></p>

    <label>Usuário</label>
    <select id="usuario" name="usuario">
      <option value="admin">Admin</option>
      <option value="vendedor">Vendedor</option>
      <option value="teste">Teste</option>
    </select>
  
    <p><button type="submit" id="botao">Entrar</button></p>

  </form>
</div>
</body>

</html>