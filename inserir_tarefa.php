<?php

    print_r($_POST);

    $dsn = 'mysql:host=localhost;dbname=db_to_do';
    $usuario = 'root';
    $senha = '';

    try { 

    $conexao = new PDO($dsn, $usuario, $senha);
 
    $query = 'SELECT * FROM tb_usuarios';
 
    $stmt = $conexao->query($query);   
 
     //$lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
    //$lista = $stmt->fetchAll(PDO::FETCH_NUM);
 


     
    } catch(PDOException $e) { 
        echo 'Erro' .$e->getCode().' Mensagem: '.$e->getMessage();
        //registra erro
    }

?> 