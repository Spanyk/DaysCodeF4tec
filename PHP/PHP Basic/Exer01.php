<!-- Faça um programa que receba um valor pago, um segundo valor que é o preço do produto e retorne o troco a ser dado. -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/global.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercicio 1</title>
</head>

<body>

    <div class="container">
        <div class="card">
            <h1>Exer 1</h1>
        </div>
        <form method="get">
            <div class="card-input">
                <label for="valor">
                    Dinheiro em mãos:
                    <input type="text" name="valor">
                </label>
            </div>
            <div class="card-input">
                <label for="preco">
                    Preço do produto:
                    <input type="text" name="preco">
                </label>
            </div>
            <button class="btn-submit"> Enviar </button>
        </form>
        <div class="resultado">
            <span>
                <?php
                    $resultado = intval($_GET["valor"] - $_GET["preco"]);
                    echo $resultado;
                 ?>
            </span>
        </div>
    </div>
</body>

</html>