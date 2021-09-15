<?php

    session_start();

    /*
    BUGS PARA RESOLVER:
    TO DO VAZIO NÃO PODE ADD
    TO DO MUITO LONGO QUEBRA O LAYOUT 
    */

    print_r($_POST);
    echo '<br>';
    echo $_POST['to_do'];
    echo '<br>';
    echo $_SESSION['user_id'];

    $to_do = $_POST['to_do'];

    $dsn = 'mysql:host=localhost;dbname=db_to_do';
    $usuario = 'root';
    $senha = '';

    try { 

    $conexao = new PDO($dsn, $usuario, $senha);

    $query = '
    INSERT INTO tb_to_dos( 
        descricao, id_usuario, status_to_do
    ) VALUES (
        "'.$_POST['to_do'].'", "'.$_SESSION['user_id'].'", 0
    )                
    ';
    $conexao->exec($query);   

    header('Location: to_dos/add_to_do.php');
    
    } catch(PDOException $e) { 
        echo 'Erro' .$e->getCode().' Mensagem: '.$e->getMessage();
        //registra erro
    }

?> 