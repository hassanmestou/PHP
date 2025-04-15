<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador ternário</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-container w3-teal">
        <h2>Valor final da compra</h2>
    </div>

    <form action="ternarioAct.php" method="post" class="w3-container">
        <label class="w3-text-teal"><b>Nome do usuário</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtNome" type="text">

        <label class="w3-text-teal"><b>valor total da compra</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtValor" type="number">
        <br>

        <button class="w3-btn w3-blue-grey">Enviar</button>
    </form>
</body>
</html>