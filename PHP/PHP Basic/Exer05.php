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
    <h1> Exer 3 </h1>

    <div class="container">
        <form method="get" class="container form">
            <div class="card-input">
                <label for="nt_1">Nota 1</label> 
                <input type="text" name="nt_1"></div>
           <div class="card-input">
                <label for="nt_2">Nota 2</label>
                <input type="text" name="nt_2"></div>
           <div class="card-input">
                <label for="nt_3"> Nota 3</label>
                <input type="text" name="nt_3">
            </div>
            <div class="card-input"> 
                <label for="nt_4">Nota 4</label>
                <input type="text" name="nt_4">
            </div>
            <div class="btn">
                <button class="btn-submit">Confirmar</button>
            </div>
        </form>
        <div class="resultado">
            <p class="resultado-card"> <?php echo $media?> </p>
        </div>
    </div>
    <?php
    //Desenvolva um programa que receba um valor digitado pelo usuário e imprima o texto "o valor é maior que 10" caso isso seja verdade, senão imprima "o valor é menor que 10". 
    $ntn_1 = intval($_GET["nt_1"]);
    $ntn_2 = intval($_GET["nt_2"]);
    $ntn_3 = intval($_GET["nt_3"]);
    $ntn_4 = intval($_GET["nt_4"]);
    
    $media = floatval(($ntn_1 + $ntn_2 + $ntn_3 + $ntn_4) / 4);

    echo $media >= 7 ? "Aprovado" : "Reprovado";
    ?>
</body>
</html>