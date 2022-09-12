<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>FATEC | Calculadora de IMC</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap');


    .tittle {
      color: rgb(255, 255, 255);
      text-align: center;
      font: 150px;
      letter-spacing: -2px;
      padding: 22px;
      background-color: brown;
      border-bottom: solid rgb(228, 228, 228);
    }

    .tittle::after {
      content: "";
      position: absolute;
      top: 62px;
      left: 570px;
      margin: 0 auto;
      padding: 1.5px;
      background: #d1d1d1;
      box-shadow: 1px 1px 1px 1px #868484;
      width: 200px;
      border-radius: 10px;
    }

    .info {
      position: relative;
      float: right;
      background-color: rgb(252, 250, 250);
      padding: 10px;
      width: 400px;
      margin: 20px
    }

    .info h4 {
      color: #359696;
      font-family: monospace;
      padding: 6px;
      border-bottom: solid #359696;
      width: 300px;
    }

    .info p {
      font-family: 'Inconsolata', monospace;
      letter-spacing: 2px;
      font-size: 13px;
      margin: 5px;
      padding: 3px;
    }

    .calculadora {
      border-radius: 0px solid #121212;
      width: 500px;
      float: left;
      margin-top: 20px;
      padding: 20px;
    }

    .resultado {
                background: #ff5202;
                color: #fff;
                font-size: 22px;
                padding: 10px 20px;
                border-radius: 20px;
                width: 200px;
                margin: 40px 0;
            }
  </style>
</head>

<body>
  <header class="tittle">
    <div>
      <h2>Calculadora IMC</h2>
    </div>
  </header>
  <div class="container">
    <div class="info">
      <h4>Afinal, o que é imc ?</h4>
      <p>
        IMC é a sigla para Índice de Massa Corpórea, parâmetro adotado pela
        Organização Mundial de Saúde para calcular o peso ideal de cada
        pessoa.
      </p>
      <p>
        O índice é calculado da seguinte maneira: divide-se o peso do paciente
        pela sua altura elevada ao quadrado. Diz-se que o indivíduo tem peso
        normal quando o resultado do IMC está entre 18,5 e 24,9.
      </p>
      <p>
        Quer descobrir seu IMC? Insira seu peso e sua altura nos campos abaixo
        e compare com os índices da tabela. Importante: siga os exemplos e use
        pontos como separadores.
      </p>
    </div>
    <!-- ------ Calculador ------------>
    <form class="calculadora" action="exer06.php" method="post">
      <div class="form-floating mb-3">
        <input class="form-control" id="idAltura" name="altura" type="double" placeholder="Ex: 1.73" required value="<?php if (isset($altura)) {
                                                                                                                        echo $altura;
                                                                                                                      } ?>" />
        <label class="floatingInput" for="altura">Altura<small>(ex.: 1.70):</small></label>
      </div>
      <div class="form-floating mb-3">
        <input class="form-control" id="idPeso" name="peso" type="double" placeholder="Ex: 73.." required value="<?php if (isset($peso)) {
                                                                                                                    echo $peso;
                                                                                                                  } ?>" />
        <label class="floatingInput" for="peso">Peso <small>(ex.: 69.2):</small> </label>
      </div>
      <!-- Validar formulário -->
      <div style="display:flex; margin: 20px; padding: 5px;">
        <div class="btn btn-lg">
          <button type="submit" class="btn btn-success btn-lg" id="idCalc" name="calcular"> Calcular</button>
        </div>
        <div class="btn btn-lg">
          <button type="reset" class="btn btn-danger btn-lg" name="limpar">Limpar</button>
        </div>
      </div>
      <p <?php if (isset($_POST['calcular'])) { echo "class='resultado'"; } ?>>
        <?php
        $imc = "";
        if (isset($_POST['calcular'])) {
          if (!empty($_POST['peso']) and !empty($_POST['altura'])) {

            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            $imc = ($peso / (pow($altura, 2)));
            if ((is_numeric($peso)) and (is_numeric($altura))) {
              echo "Seu IMC: ";
              echo number_format($imc, 2, ",", ".");
            } else
              echo "Valores digitados inválidos";
          }
        }

        ?>
      </p>

      <table class="table table-striped ">
        <tbody>
          <tr class="table-info">
            <th scope="col">IMC</th>
            <th scope="col">Classificação</th>
            <th scope="col" style="text-align: center">
              Obesidade
              <small>(grau)</small>
            </th>
          </tr>
          <tr <?php
              if (($imc > 0) && ($imc < 18.5))
                echo "class='table-info'";
              ?>>
            <td>Menor que 18.5</td>
            <td>Magreza</td>
            <td style="text-align: center">O</td>
          </tr>
          <tr <?php
              if (($imc >= 18.5) && ($imc <= 24.9))
                echo "class='table-info'";
              ?>>
            <td>Entre 18,5 e 24,9</td>
            <td>Normal</td>
            <td style="text-align: center">O</td>
          </tr>
          <tr <?php if (($imc >= 25) && ($imc <= 29.9))
                echo "class='table-info'"; ?>>
            <td>Entre 25,0 e 29,9</td>
            <td>Sobrepeso</td>
            <td style="text-align: center">I</td>
          </tr>
          <tr <?php if (($imc >= 30) && ($imc <= 39.9))
                echo "class='table-info'"; ?>>
            <td>Entre 39,0 e 39,9</td>
            <td>Obesidade</td>
            <td style="text-align: center">II</td>
          </tr>
          <tr <?php if (($imc >= 40))
                echo "class='table-info'"; ?>>
            <td>Maior que 40,0</td>
            <td>Obesidade grave</td>
            <td style="text-align: center">III</td>
          </tr>
        </tbody>
      </table>
    </form>
  </div>

</body>

</html>