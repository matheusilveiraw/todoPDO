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
                <button onclick="chamarPg('to_dos/add_to_do.html')">Adicionar um To do</button> | <button onclick="chamarPg('to_dos/lista_to_dos.html')">Ver to dos</button> | <button onclick="chamarPg('to_dos/to_dos_concluidos.html')">To Dos Concluidos</button>
            </div>

            <div id="conteudoAjax">

            </div>

        </div>
    </div>

    <script src="script.js">
    </script>
</body>
</html>