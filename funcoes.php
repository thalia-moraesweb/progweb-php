<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funçoes</title>
</head>
<body>

    <h1>funçoes no php</h1>
    <hr>
    <h2>funçoes basicas (sem retorno)</h2>

    <?php 
    function dadosAutor(){
        echo "<div>";
        echo "<p>Thalia</p>";
        echo date("d/m/Y");
        echo "</div>";
    }
    ?>

    <section>
        <p>Projeto de Site Back-End</p>
        <?=dadosAutor()?>
    </section>

    <h2>Funçoes com retorno de dados </h2>
    <?php
    function dadosCurso(){
        return "Programador Web - 240 horas";
    }
    ?>
    <p>Informaçoes: <?=dadosCurso()?></p>
    <p>o Senac Penha tem o curso 
    <?=dadosCurso()?></p>

    <h2>Funçoes com parametros/argumentos</h2>

    <?php
    function soma( $valor1, $valor2 ){
        return $valor1 + $valor2;
    }
    ?>
    <p> <?soma(150,200)?> </p>
    <p> <?soma(28, 87)?></p>

    <?php
    $primeiro = 1257.45;
    $segundo = 10489;
    ?>
    <p> <?=soma($primeiro, $segundo)?> </p>