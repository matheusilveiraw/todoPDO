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


    //essa variavel vai servir simplesmente para eu conseguir levar o programa ao erro quando nem usuario nem senha forem compativeis, ela vai estar com false e vai virar true qnd cair no erro de email e vai virar false quando o erro for na senha
    $senhaOk = false;
    $emailOk = false;    

    foreach ($lista as $value) { 
        echo '<pre>';
        print_r($value);
        echo '</pre>';

        if($_POST['email'] == $value[1]) { 
            echo 'Email compativel!'; 
            $emailOk = true;   

            if($_POST['senha'] == $value[2]) { 
                echo 'Senha compativel! Login!'; 
                $senhaOk = true;

                header('Location: principal.html');
                //entrar na tela principal para criar os to dos 
                break;
                //precisa setar algumas informações e preciso manter o usuario logado, assim como não deixar alguém entrar sem logar 
            } else { 
                echo 'Senha incompatvel!';
                //encaminhar para login com erro de senha
                header('Location: login.php?login=erro2');
                break;
            }         
        } else { 
            echo 'Email incompatvel!';
            //encaminhar para login com erro de email -> não posso fazer isso pq toda vez que errar ele vai encaminhar
            //header('Location: login.php?login=erro1');

            }

            echo 'Senha: '.$senhaOk.' Email '. $emailOk;


        }

        if($emailOk == false && $senhaOk == false) { 
            header('Location: login.php?login=erro1');
        }




   } catch(PDOException $e) { 
       echo 'Erro' .$e->getCode().' Mensagem: '.$e->getMessage();
       //registra erro
   }

?>