<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>
    <h1>Processamento de Dados</h1>
    <hr>

    <?php
    if( empty($_POST["nome"]) || empty($_POST["email"]) ){
    ?>

    <p style="color: blue;"> Por favor preencha nome e e-mail!</p>
    <p><a href="08-formulario.html">Voltar</a></p> <!-- opcional -->
    <?php
    } else {

  ?>
    <?php
   /*  echo "<pre>";
    var_dump($_POST);
    echo "</pre>"; */

    // Capturando os dados enviados a partir do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];

    /* Se existir o  $_POST['interesses'],
    o que foi selecionado fica n a variavel. Caso contrario,
    deixe um array vazio na variável.
    
    ?? Operador de coalescencia nula */
    $interesses = $_POST["interesses"] ?? []; 
    $informativos = $_POST["informativos"];
    $mensagem = $_POST["mensagem"];
    ?>
    <h2>Dados:</h2>
    <hr>
    <ul>
        <li> Nome: <?=$nome?> </li>
        <li> Email: <?=$email?> </li>
        <li> Idade: <?=$idade?> </li>

        <!-- Aqui usamos o operador de negação (!) para inverter
        a lógica de função empty. -->

        <!-- Se interresses NÃO ESTIVER VAZIO -->
        <?php if( !empty($interesses) ){  ?>
        <!-- Então, faça tudo embaixo: -->
        <li> interesses: 
            <ul>
            <?php foreach($interesses as $interesse){?> 
                <li> <?=$interesse?> </li>
                <?php } ?>
                
            </ul>

            <?php } ?>
            
    </li>
        <li> Informativos: <?=$informativos?> </li>
        <li> Mensagem: <?=$mensagem?> </li>
        </ul>
        <?php } ?> <!-- fim do else -->


    </body>
</html>