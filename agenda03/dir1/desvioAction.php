<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <h1 class="w3-container w3-teal">
        <?php
            echo "".$_POST["txtNome"]."! <br>";
            echo "Valor total da compra: R$ ".$_POST['txtValorTotal']."<br>";
        
        ?>
        <?php
            if($_POST['cmbRegiao'] == "Sudeste"){
                echo "Neste m~es estamos com frete grátis para região sudeste";
            }
        
        ?>
    </h1>
</body>
</html>