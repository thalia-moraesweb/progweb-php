<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correção do Exercico 3</title>
</head>
<body>

    <?php
    $salario = 500;

    if($salario < 500){
        $reajuste = $salario * 1.15;
    } elseif ($salario <=1000 ){
        $reajuste = $salario * 1.10;
    }else {
        $reajuste = $salario * 1.05;
    }
    echo "<p>$salario e $reajuste</p>";
    ?>
<p> <?=$salario?> e <?=$reajuste?> </p>
<!-- nova forma mais correta de usar -->

<!-- 
    number_format(
        valor,
        quantidade de casas decimais,
    "separador de casa decimal",
    "separador de milhar"
    )
 -->
        <p> R$ <?=number_format($salario,2,",",".")?>
        e R$ <?=number_format($reajuste,2,",",".")?>
    </p>


</body>
</html>