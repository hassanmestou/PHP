<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-container 3-teal">
        <h2>Calculo de média e resultado Final</h2>
    </div>
    <form  class="w3-container" method="post" action="desvioaction.php">
        <label class="w3-text-teal"><b>Nome do Aluno</b></label>
        <input class="w3-input w3-border w3-lightgrey" name="txtNome" type="text">
        <label class="w3-text-teal"><b>Nota 1</b></label>
        <input class="w3-input w3-border w3-lightgrey" name="txtN1" type="number">
        <label class="w3-text-teal"><b>Nota 2</b></label>
        <input class="w3-input w3-border w3-lightgrey" name="txtN2" type="number">
        <label class="w3-text-teal"><b>Nota 3</b></label>
        <input class="w3-input w3-border w3-lightgrey" name="txtN3" type="number">
        <br>
        <button class="w3-btn w3-blue-grey">Calcular média</button>
    </form>
</body>
</html>