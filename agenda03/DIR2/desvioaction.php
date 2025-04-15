<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <h1>
        <?php
            $n1 = $_POST['txtN1'];
            $n2 = $_POST['txtN2'];
            $n3 = $_POST['txtN3'];
            $media = ($n1+$n2+$n3)/3;

            $resultado;

            echo "".$_POST['txtNome']."! Sua média foi".$media."!!! <br>";
            if($media >= 7){
                $resultado = "Aprovado";
            }
            elseif ($media < 5) {
                $resultado = "reprovado";
            }
            else{
                $resultado = "Exame final";
            }    
            echo "$resultado";
        ?>
    </h1>
</body>
</html>