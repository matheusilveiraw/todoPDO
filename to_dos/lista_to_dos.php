
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


<title>To Dos - Não concluidos</title>
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
        <?php
                $dsn = 'mysql:host=localhost;dbname=db_to_do';
                $usuario = 'root';
                $senha = '';

                try { 

                    $conexao = new PDO($dsn, $usuario, $senha);

                    $query = "SELECT descricao FROM tb_to_dos WHERE id_usuario = 12 AND status_to_do = 0;";

                    $stmt = $conexao->query($query);   

                    $lista = $stmt->fetchAll(PDO::FETCH_NUM);
                    
                    // echo '<pre>';
                    // print_r($lista);
                    // echo '</pre>'; 

                    foreach($lista as $value) { 
                        // echo "
                        // <form method='GET' action='../conclui_to_do.php'>
                        // <p class='text-center' name='paragrafo'>
                        // <span name='descricao'>
                        //     " .$value[0]. " </span>
                        //     <input type='submit' value='Concluir'>
                        // </p>
                        // </form>
                        // ";

                        echo '<form method="GET" action="../conclui_to_do.php">
                            <input type="text">
                            <input type="submit">
                        </form>';
                    }


                } catch(PDOException $e) { 
                    echo 'Erro' .$e->getCode().' Mensagem: '.$e->getMessage();
                }

            ?>
        </div>

    </div>
</div>

<script src="script.js">
</script>
</body>
</html>