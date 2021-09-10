<?php 

  //echo $_GET['login'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">

    <title>Cadastro</title>
</head>
<body>
    <!-- <div class="container">
        <div class="col"> -->
      <div class="centraliza-box-login-cadastro">
        <div class="tamanho-box-login-cadastro">
          <form class="border border-primary rounded p-2" method="POST" action="valida_cadastro.php"> 
            <h2 class="text-center mt-1">Cadastra-se</h2>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" placeholder="Enter email" name="email">

              <?php 

              if(isset($_GET['login'])) { 
                if($_GET['login'] == 'erro1') { 
                  echo "<p class='text-danger'>Esse email já foi usado para cadastro!</p>";
                }
              }

              ?>

            </div>
    
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" placeholder="Password" name="senha">
            </div>
    
            <button type="submit" class="btn btn-primary mt-2">Cadastra-se</button>
    
          </form>
    
          <div class="text-center mt-2">
            <a href="login.php">Já tem conta? Logue-se!</a>
          </div>
    
        </div>
      </div>
</body>
</html>