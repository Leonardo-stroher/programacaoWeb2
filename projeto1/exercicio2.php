<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICIO</title>
</head>
<body>
    <h1>aula de php</h1>
    <p>testaremos nesse bloco o switch case</p>
    <div>
    <?php
    $op= 1;
    switch($op){
        case 1: echo"sexta-feira!"; break;
        case 2: echo"aula de php"; break;
        default:
        echo"nem 1 nem 2";
    }?>
    </div>
</body>
</html>