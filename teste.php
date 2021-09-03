<?php 
    $valor = 'uma valor qualquer';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
</head>
<body>
    <?php
        echo '<p hidden id="p1">'.$valor.'</p>';
    ?>
    <script>
        let valor = document.getElementById('p1').innerText;

        console.log(valor)
    </script>
</body>
</html>