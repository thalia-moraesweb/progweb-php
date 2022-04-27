<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Arrays</title>
</head>
<body>
    <?php

   $clientes = [
       "nome" => "Miguel",
       "idade" => 25,
       "email" => "miguel@gmail.com",
       "sexo" => "Masculino",
   ];
   $clientes2 = [
    "nome" => "Mirela",
    "idade" => 25,
    "email" => "mirela@gmail.com",
    "sexo" => "Feminino",
   ];
    ?>
        <p>
            Olá meu nome é <?=$clientes["nome"]?> tenho 
            <?=$clientes["idade"]?> anos meu e-mail é <?=$clientes["email"]
        ?></p>

    <p>
            Olá meu nome é <?=$clientes2["nome"]?> tenho 
            <?=$clientes2["idade"]?> anos meu e-mail é <?=$clientes2["email"]
        ?></p>

    

 
  



  
</body>
</html>