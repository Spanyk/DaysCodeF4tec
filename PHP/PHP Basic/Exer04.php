<?php
    //Desenvolva um programa que receba um valor digitado pelo usuário e imprima o texto "o valor é maior que 10" caso isso seja verdade, senão imprima "o valor é menor que 10". 
    $num = intval($_GET["valor"]);
    if ($num > 1) {
        $n = "Valor Positivo";
    }
    elseif ($num < 0){
        $n =  "Valor Negativo";
    }
    else {
        $n = "O Número digitado é igual a zero";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/global.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="card">
        <h1>Exer 4</h1>
    </div>
    <div>
        <form method="get">
            <label for="valor">
                Valor Qualquer
                <input type="text" name="valor">
            </label>
            <button> Confirmar </button>
        </form>
        <div class="resultado">
            <span>
                 <?php echo $n ?>
            </span>
        </div>
    </div>
   
</body>
</html>