<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
</head>
<body>
    <?php
    /* Ex. 3 - Crie um scrip PHP que declare duas variáveis de string, $primeironome e $segundonome. Concatene essas variáveis para formar o nome completo e exiba o resultado.*/ 
    $traço =
    "<br>==============================================================<br>";
    $primeiroNome = "Maria";
    $segundoNome = "do Bairro";

    $nomeCompleto = $primeiroNome. "&nbsp;".$segundoNome;

    echo "Nome completo: $nomeCompleto";
    echo $traço;
    
    /*==============Variáveis de Atribuição==============*/

    $num1 = 7252;
    $num2 = 98;
    echo "A soma entre eles é: ".$num1 += $num2;
    echo "<br>";
    $num1 = 7252;
    echo "A subtração entre os números é: ".$num1 -= $num2;
    echo "<br>";
    $num1 = 7252;
    echo "A multiplicação entre os números é: ".$num1 *= $num2;
    echo "<br>";
    $num1 = 7252;
    echo "A divisão entre os números é: ".$num1 /= $num2;
    echo "<br>";

    echo "Exemplos de incremento e decremento";
    $numero = 10;
    echo "Valor da variável: $numero<br>";
    $numero++;
    echo "Valor da variável após o incremento: $numero<br>";
    $numero--;
    echo "Valor da variável após o decremento: $numero<br>";
    echo $traço;
    echo "Exemplo de troca de valores com variáveis<br>";
$a = 10;
$b = 20;

echo "Valores originais: a = $a, b = $b <br>";


$a += $b; /* $a = $a + $b */
$b = $a -$b;
$a -=$b; /* $a = $a - $b*/

echo "Valores trocados: a = $a, b = $b";

    ?>
    </body>
    </html>