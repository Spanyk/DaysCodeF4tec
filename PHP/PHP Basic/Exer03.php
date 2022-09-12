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
        <h1>Exer 3</h1>
    </div>

    <div>
        <form method="get">
            <div>
                <label for="valor">
                Digite um número: 
            </label>
             <input type="text" name="valor">
            </div>
            <div class="btn-submit">
               <button> Confirmar </button>     
            </div>
        </form>
        <div class="resultado">
            <span>
                <?php 
                $valor = $_GET["valor"];
                echo $valor > 10 ? "O Valor é maior que 10" :  "Valor é menor que 10"; 
                ?>
            </span>
        </div>
    </div>
</body>
</html>