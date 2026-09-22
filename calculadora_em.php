
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>  
    <center>
    <div class="quadrado"></div>
    <div class="texto">
    <h1>Calculadora em PHP</h1>

    <form action="somar.php" method="POST">

        <label for="numero1">Primeiro número:</label>
        <input type="number" name="numero1" id="numero1" step="any" required>

        <br><br>

        <label for="numero2">Segundo número:</label>
        <input type="number" name="numero2" id="numero2" step="any" required>

        <br><br>

        <label for="operacao">Escolha a operação:</label>

        <select name="operacao" id="operacao" required>
            <option value="soma">Soma (+)</option>
            <option value="subtracao">Subtração (-)</option>
            <option value="multiplicacao">Multiplicação (*)</option>
            <option value="divisao">Divisão (/)</option>
        </select>


        <br><br>

        <button type="submit">Calcular</button>
        </center>
        </div>
    </form>

</body>
</html>


