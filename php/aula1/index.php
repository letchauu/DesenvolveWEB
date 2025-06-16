<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <?php
    # primeiro código
    //echo "Olá Mundo!";
    // imprime a mensagem Olá Mundo na tela
    /* comentários em linha podem ser feitos com os símbolos # e //, já os comentários com mais de uma linha devem ser feitos com os sinais /* e */


    //Variáveis em PHP

    $texto = "<h1>Sou aluno da TI36 no Senac de Botucatu</h1>";
    echo $texto;

    $traço =
    "<br>==============================================================<br>";
    echo $traço;
    $nome = "Chaves";
    $sobrenome = "del Ocho";
    echo "Olá, meu nome é $nome e meu sobrenome é $sobrenome.";
    echo $traço;
    /*Ex. 1 - Crie um script PHP que declare três variáveis: $nome, $idade e $cidade. Atribua valores a essas variáveis e exiba uma mensagem que combine esses valores. */
    $nome = "Letícia";
    $idade = "26";
    $cidade = "São Paulo";
    echo "Meu nome é $nome, tenho $idade anos e nasci em $cidade";
    echo $traço;
    /* 
    Operações Aritméticas no PHP:
    Soma:          +
    Subtração:     -
    Multiplicação: *
    Divisão:       /
    */
    $numero1 = 56;
    $numero2 = 44;

    $soma = $numero1 + $numero2;
    echo "A soma entre $numero1 e $numero2 é igual a $soma";

    $traço;
    /* Ex.2 - Crie um script PHP que declare duas variáveis númericas, $num1 e $num2. Realize as operações de soma, subtração, multiplicação e divisão entre essas variáveis e exiba os resultados. */
    $num1 = 85;
    $num2 = 47;

    $soma = $num1 + $num2;
    $subtraçao = $num1 - $num2;
    $multiplicaçao = $num1 * $num2;
    $divisao = $num1 / $num2;

    echo "A soma entre $num1 e $num2 é igual a $soma<br>";
    echo "A subtração entre $num1 e $num2 é igual a $subtraçao<br>";
    echo "A multiplicação entre $num1 e $num2 é igual a $multiplicaçao<br>";
    echo "A divisão entre $num1 e $num2 é igual a $divisao";

?>
</body>
</html>