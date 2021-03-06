<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP</title>


    <style>
        .aprovado { color: blue;}
        .reprovado { color: red;}
        .recuperação {color: orangered;}
    </style>

</head>
<body>
    <h1>Condicionais</h1>
    <hr>


    <h2>Condicional Simples só tem o if não tem o else</h2>
    <?php
    $numero = 5;
    $outroNumero = 1;

    if( $numero > $outroNumero ){
        echo "<p>$numero é maior que $outroNumero!</p>";
    }
    ?>

    <h2>Composta</h2>
    <?php
    $nota1 = 7;
    $nota2 = 9;
    $media = ($nota1 + $nota2) / 2;
    echo "<p>Média: $media</p>";

    if ($media >= 7 ){
        echo "<p class= 'aprovado'>Aprovado</p>";
    } else {
        echo "<p class= \"reprovado\">Reprovado</p>";
    }
    ?>

             <h2>Encadeada quando se tem mais de 2 possibilidade</h2>
    <?php
    if( $media >=7){
    echo "<p class= \"aprovado\">Aprovado</p>";
    } elseif( ($media >= 6) && ($media < 7)){
        echo "<p class= \"recuperação\">Recuperação</p>";
    } else {
        echo "<p class= \"reprovado\">Reprovado</p>";
    }
    ?>

    <h2>Switch/case</h2>
    <?php
    $opcao = 5;

    switch($opcao){
        case 1: $assunto = "Reclamação"; break;
        case 2: $assunto =  "Elogio"; break;
        case 3: $assunto =  "Informações"; break;
        default: $assunto = "Falar com um humano"; break;
    }

    echo "<p>$assunto</p>";

    ?>
</body>
</html>