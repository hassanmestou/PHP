<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do aumento</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-container w3-teal">
        <h1>
            <?php
            
                $nome = $_POST['nome'];
                $salario = $_POST['salario'];
                $dependentes = $_POST['dependentes'];
                $aumento;
                $calculo;
                if ($salario <= 500 && $dependentes <= 5){
                    $aumento = 15;
                }
                elseif ($salario <= 500 && $dependentes > 5){
                    $aumento = 20;
                }
                elseif ($salario > 500 && $salario <= 1000 && $dependentes <= 5){
                    $aumento = 10;
                }
                elseif ($salario > 500 && $salario <= 1000 && $dependentes > 5){
                    $aumento = 15;
                }
                elseif ($salario > 1000 && $salario <= 2000 && $dependentes <= 5){
                    $aumento = 10;
                }
                elseif ($salario > 1000 && $salario <= 2000 && $dependentes > 5){
                    $aumento = 12;
                }
                elseif ($salario > 2000 && $dependentes <= 5){
                    $aumento = 8;
                }
                elseif ($salario > 2000 && $dependentes > 5){
                    $aumento = 10;
                }
                echo "".$_POST['nome']." Meus parabens vc teve um aumento de $aumento% <br>";
                echo "De acordo com o seu salario de: $salario <br>";
                $calculo = ($salario*$aumento)/100;
                echo "Seu aumento foi de R$ $calculo <br>";
                echo "Novo salário: R$".$calculo+$salario;
            ?>
        </h1>
    </div>
</body>
</html>