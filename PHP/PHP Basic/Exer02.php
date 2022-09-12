<!-- Faça um programa que receba o valor do quilo de um produto e a quantidade de quilos do produto consumida, calculando o valor final a ser pago.  -->
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
        <h1>Exer 2</h1>
    </div>

    <div>
        <form method="get">
            <div>
                <label for="valor">
                Preço 
                <small>(kg)</small>
                
                </label>
                <input type="text" name="valor">
            </div>
            <div>
                <label for="qtde"> Quantidade </label>
                <input type="text" name="qtde">
            </div>
            <div>
               <button> Confirmar </button> 
            </div>
        </form>
        <div class="resultado">
            <span>
                <?php
                $resultado = intval($_GET["valor"] * $_GET["qtde"]);
                echo $resultado; 
                ?>
            </span>
        </div>
    </div>
</body>
</html>