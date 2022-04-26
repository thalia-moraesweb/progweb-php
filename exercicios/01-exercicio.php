<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio </title>
</head>
<body>
  <?php
  $data = date("d/m/Y");
  const NOME = "Fulano";
  $idade =  25;
  const CIDADE ="Rio de Janeiro";
  ?>

  <!-- Hoje é 26/04/2022. Fulano tem 20 anos e nasceu em Rio de Janeiro -->
  <p> Hoje é <?=$data?>. <?=NOME?> tem <?=$idade?> e nasceu no <?=CIDADE?> </p> 

</body>
</html>