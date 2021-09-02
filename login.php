<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="col">
          <h2 class="text-center mt-5">Login</h2>
          <form class="border border-primary rounded p-2" method="POST" action="valida_login.php">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">

              <?php
              
                if(isset($_GET['login'])){  
                  if($_GET['login'] == 'erro1') { 
                    echo "<p class='text-danger'>O email inserido não foi encontrado no nosso banco de dados! </p>";
                  }
                }
              
              ?> 
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="senha">

              <?php
              
                if(isset($_GET['login'])){  
                  if($_GET['login'] == 'erro2') { 
                    echo "<p class='text-danger'>A senha não é compativel com o email inserido!</p>";
                  }
                }
              
              ?>


            </div>
            <button type="submit" class="btn btn-primary mt-2">Login</button>
          </form>
          <div class="text-center mt-2">
            <a href="cadastro.php">Não possui uma conta? Registre-se agora!</a>
          </div>

        </div>
      </div>
</body>
</html>