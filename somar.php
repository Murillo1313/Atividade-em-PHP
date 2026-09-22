
<?php

function somar($numero1, $numero2) {
    return $numero1 + $numero2;
}

function subtrair($numero1, $numero2) {
    return $numero1 - $numero2;
}

function multiplicar($numero1, $numero2) {
    return $numero1 * $numero2;
}

function dividir($numero1, $numero2) {
    return $numero1 / $numero2;
}

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacao = $_POST['operacao'];

switch ($operacao) {

    case 'soma':
        $resultado = somar($numero1, $numero2);
        $simbolo = '+';
        break;

    case 'subtracao':
        $resultado = subtrair($numero1, $numero2);
        $simbolo = '-';
        break;

    case 'multiplicacao':
        $resultado = multiplicar($numero1, $numero2);
        $simbolo = '*';
        break;

    case 'divisao':
        if ($numero2 == 0) {
            echo "Não é possível dividir por zero.";
            exit;
        }

        $resultado = dividir($numero1, $numero2);
        $simbolo = '/';
        break;

    default:
        echo "Operação inválida.";
        exit;
}

echo "<h1>Resultado</h1>";
echo "<p>$numero1 $simbolo $numero2 = $resultado</p>";

?>







