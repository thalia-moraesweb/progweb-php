<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <style>
        .reajuste { color: blue;}
        .salario {color: red;}
    </style>
</head>
<body>
    <?php
    $salario = 500 ;
   
 
    

 if( $salario < 500)  {
     $reajuste = $salario*1.15;
   
    } elseif ($salario <= 1000){
        $reajuste = $salario * 1.10;
      
    } else  {
       $reajuste = $salario * 1.05;
        
    } 
      
     echo "o salário antes do reajuste era <spam class = salario >$salario</spam> após o reajuste de 15% ficou em <spam class = reajuste>$reajuste</spam></spam>";
        




    ?>
</body>
</html>