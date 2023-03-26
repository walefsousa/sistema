<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">

    <title>Login</title>
</head>

<body>
   
<h3>LOGO</h3>

<div>
  <form action="/action_page.php">
    <label for="fname">Login</label>
    <input type="text" id="fname" name="firstname" placeholder="Login">

    <label for="lname">Senha</label>
    <input type="text" id="lname" name="lastname" placeholder="Password">

    <label for="usuario">Usuário</label>
    <select id="usuario" name="usuario">
      <option value="admin">Admin</option>
      <option value="vendedor">Vendedor</option>
      <option value="teste">Teste</option>
    </select>
  
    <button type="submit">Entrar</button>

  </form>
</div>
</body>

</html>