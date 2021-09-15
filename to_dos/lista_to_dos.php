
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


<title>To Dos - Não concluidos</title>
</head>
<body>
<div class="container">
    <div class="row">
            <div class="">
                <div class="box-menu mr-2 ml-2">
                    <h3 class="text-center">MENU</h3>

                    <div class="text-center">
                        <a href="add_to_do.php">Adicionar To Do</a> | <a href="lista_to_dos.php"  class="underline">To Dos Incompletos</a> | <a href="to_dos_concluidos.php">To Dos Completos</a>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="mt-4 box-listar">
                    <h4 class="text-center">Lista to dos</h4>
                    <?php
                            $dsn = 'mysql:host=localhost;dbname=db_to_do';
                            $usuario = 'root';
                            $senha = '';

                            try { 

                                $conexao = new PDO($dsn, $usuario, $senha);

                                $query = 'SELECT descricao FROM tb_to_dos WHERE id_usuario = "'.$_SESSION['user_id'].'" AND status_to_do = 0;';
                                //descricao  = "'.$_POST['to-do'].'" AND id_usuario = "'.$_SESSION['user_id'].'"  ';

                                $stmt = $conexao->query($query);   

                                $lista = $stmt->fetchAll(PDO::FETCH_NUM);
                                
                                // echo '<pre>';
                                // print_r($lista);
                                // echo '</pre>'; 

                                foreach($lista as $value) { 

                                    echo "
                                    <form method='POST' action='../conclui_to_do.php' class='text-center mt-4'>
                                        <input type='text' value='$value[0]' name='to-do' readonly class='input-lista-to-dos' hidden>
                                        <span>$value[0]</span>
                                        <input type='submit' value='Concluir'>
                                    </form>";
                                }
                            } catch(PDOException $e) { 
                                echo 'Erro' .$e->getCode().' Mensagem: '.$e->getMessage();
                            }
                    ?>
                </div>
            </div>
    </div>
</div>

<script src="../script.js">
</script>

</body>
</html>