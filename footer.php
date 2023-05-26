
 <div class="principal">
    <?php
    include('conexao.php');

      $sql_code = "SELECT reg, dia FROM register ORDER BY id DESC LIMIT 1;";
      $sql_exec = $mysqli->query($sql_code) or die($mysqli_connect_error);

      $usuario = $sql_exec->fetch_assoc();
  
    ?>   
    <p class="p-nome">Bem vindo <?= $string = implode(" - " , $usuario); ?></p>

  </div>

</body>

</html>