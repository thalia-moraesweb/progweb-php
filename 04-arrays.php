<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays no PHP</title>
</head>
<body>
    <h1>Usando arrays no PHP</h1>
    <hr>
    

    <h2>Array com indice numérico</h2>

    <?php
    //Sintaxe com colchetes
    $alunos = ["Maria", "João", "Mônica"];

    //sintaxe usando função array()
    $cuursos = array("HTML", "React", "Node.js","PHP");
    ?>

    <h3>Acessando os dados</h3>
    <ul>
        <li> <?=$alunos[2]?> </li>
        <li> <?=$cuursos[1]?> </li>
    </ul>

    <hr>

    <h2>Array associativo</h2>

    <?php
    $curso = [
        "nome" => "Programador Web",
        "carga_horaria" => 240,
        "unidade" => "Penha",
        "ucs" => 5,
    ];
    ?>
        <p>
            o curso de <?=$curso["nome"]?> tem 
            <?=$curso["carga_horaria"]?> horas.
        </p>

        <hr>

        <h2>Funções de debug/depuração</h2>

            <pre>
        <?=print_r($curso)?>
        </pre>

        <pre>
        <?=var_dump($curso)?>    
        </pre>

</body>
</html>