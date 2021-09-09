<?php
    
    session_start();
    echo '<br>';

    print_r($_SESSION);

    echo '<br>';

    echo $_POST['to-do'];

    $dsn = 'mysql:host=localhost;dbname=db_to_do';
    $usuario = 'root';
    $senha = '';

    try { 

        $conexao = new PDO($dsn, $usuario, $senha);
 
        $query = '
        SELECT
            *
        FROM
            tb_to_dos
        WHERE
        descricao = "'.$_POST['to-do'].'" AND id_usuario = "'.$_SESSION['user_id'].'"  ';
        
         $stmt = $conexao->query($query);   
  
         $lista = $stmt->fetchAll(PDO::FETCH_NUM);

         $query = '
         UPDATE
             tb_to_dos
         SET
             status_to_do = 1
         WHERE
         descricao = "'.$_POST['to-do'].'" AND id_usuario = "'.$_SESSION['user_id'].'"  ';

         $stmt = $conexao->query($query);  

         header('Location: to_dos/lista_to_dos.php');
 
     echo '<pre>';
     print_r($lista);
     echo '</pre>'; 
     
 
 
 
    } catch(PDOException $e) { 
        echo 'Erro' .$e->getCode().' Mensagem: '.$e->getMessage();
    }

?>