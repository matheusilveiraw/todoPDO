<?php 
   session_start();

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

                $_SESSION['user_id'] = $value[0];
                header('Location: principal.php');

                $_SESSION['logado'] = true; //vou usar esse indice para dizer que tá logado ou não 
                $_SESSION['usuario'] = $_POST['email'];
                $_SESSION['idUser'] = $value[0]
;
                //entrar na tela principal para criar os to dos 
                break;
                //precisa setar algumas informações e preciso manter o usuario logado, assim como não deixar alguém entrar sem logar, para manter logado, é por aqui que precisa passar
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
            //passar um valor para aparecer uma mensagem quando voltar para a página
        }




   } catch(PDOException $e) { 
       echo 'Erro' .$e->getCode().' Mensagem: '.$e->getMessage();
   }

?>