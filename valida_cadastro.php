<?php 

   print_r($_POST);

   $dsn = 'mysql:host=localhost;dbname=db_to_do';
   $usuario = 'root';
   $senha = '';

   try { 

       $conexao = new PDO($dsn, $usuario, $senha);

       $query = '
       SELECT * FROM tb_usuarios
                ';

    $stmt = $conexao->query($query);   

    //$lista = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $lista = $stmt->fetchAll(PDO::FETCH_NUM);

    
    echo '<pre>';
    print_r($lista);
    echo '</pre>';

    $cadastro = true;

    foreach ($lista as $value) { 
        echo '<pre>';
        print_r($value);
        echo '</pre>';

        if($_POST['email'] != $value[1]) { 
            echo 'É possivel cadastrar!';
        } else { 
            echo 'Não é possivel cadastrar!';
            $cadastro = false;
            break;
        }
    }

    if($cadastro == true) { 
        //DIZER QUE O CADASTRO FOI UM SUCESSO, IR PARA TELA DE LOGIN

        $query = '
        insert into tb_usuarios(
            email, senha 
        ) values (
            "'. $_POST['email'].'", "'.$_POST['senha'].'"
        )                
        ';

        $conexao->exec($query);   

        header('Location: cadastro_realizado.html');
        echo 'Cadastro realizado!';
    } else { 
        //DIZER QUE O EMAIL JÁ FOI CADASTRADO COM UM ERRO NA PRÓPRIA PÁGINA 
        echo 'Cadastro não realizado!';
    }


   } catch(PDOException $e) { 
       echo 'Erro' .$e->getCode().' Mensagem: '.$e->getMessage();
       //registra erro
   }
?>