
<?php 

    session_start();
    //print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">

    <title>To Dos</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="">
                <div class="box-menu mr-2 ml-2">
                    <h3 class="text-center">MENU</h3>

                    <div class="text-center">
                        <a href="add_to_do.php" class="underline">Adicionar To Do</a> | <a href="lista_to_dos.php">To Dos Incompletos</a> | <a href="to_dos_concluidos.php">To Dos Completos</a>
                    </div>
                </div>

                <form action="../inserir_tarefa.php" method="POST" class="mt-2">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Insira seu to do aqui" name="to_do">
                            <div class="input-group-append">
                                <button class="btn btn-outline-danger" type="submit">Criar to do!</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <script src="script.js">
    </script>
</body>
</html>