
<?php 

    session_start();
    print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


    <title>To Dos</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h2 class="text-center">Bem-vindo ao sistema!</h2>
            <h3 class="text-center">O que você deseja fazer? </h3>

            <div class="text-center">
                <a href="add_to_do.php">Adicionar To Do</a> | <a href="lista_to_dos.php">To Dos Incompletos</a> | <a href="to_dos_concluidos.php">To Dos Completos</a>
            </div>

            <div class="mt-4">
                <form action="../inserir_tarefa.php" method="POST" class="text-center">
                    <label for="">
                        To Do: <input type="text" name="to_do" id="" placeholder="Insira o nome da atividade">
                    </label>
                
                    <button type="submit">
                        Guardar to do
                    </button>
                </form>
            </div>

        </div>
    </div>

    <script src="script.js">
    </script>
</body>
</html>