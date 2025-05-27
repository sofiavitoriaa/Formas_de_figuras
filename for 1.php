<?php

/* Exercício 1:
Escreva um programa em PHP que imprima os números de 1 a 10. */
echo "EXERCÍCIO 1.1:";
echo "<br> <br>";

for ($a=1; $a<=10; $a++) {
    echo $a;
    echo "<br>";
}

/* Exercício 2:
Escreva um programa em PHP que imprima os números pares de 1 a 20. */
echo "<br>";
echo "EXERCÍCIO 1.2:";
echo "<br> <br>";

for ($b=2; $b<=20; $b+=2) {
    echo $b;
    echo "<br>";
}

/* Exercício 3:
Escreva um programa em PHP que calcule a soma dos números de 1 a 100. */
echo "<br>";
echo "EXERCÍCIO 1.3:";
echo "<br> <br>";

$soma=0;
for ($c=1; $c<=100; $c++) {
    $soma+=$c;
}
echo "A soma é: $soma";
echo "<br>";

/* Exercício 4:
Escreva um programa em PHP que imprima a tabuada do número 7. */
echo "<br>";
echo "EXERCÍCIO 1.4:";
echo "<br> <br>";

for ($d=1; $d<=10; $d++) {
    $e=$d*7;
    echo "7x".$d."=".$e;
    echo "<br>";
}

/* Exercício 5:
Escreva um programa em PHP que imprima os números de 10 a 1 em ordem decrescente. */
echo "<br>";
echo "EXERCÍCIO 1.5:";
echo "<br> <br>";

for ($f=10; $f>=1; $f--) {
    echo $f;
    echo "<br>";
}

/* Exercício 6:
Escreva um programa em PHP que imprima a sequência Fibonacci com 10 elementos. */
echo "<br>";
echo "EXERCÍCIO 1.6:";
echo "<br> <br>";

$num1=0;
$num2=1;
$num3=0;

for ($g=0; $g<10; $g++) {
    if ($g<=1) {
        $num3=$g;
    } else {
        $num3 = $num1 + $num2;
        $num1 = $num2;
        $num2 = $num3;
    }
        echo "$num3";
        echo "<br>";
}

/* Exercício 7:
Escreva um programa em PHP que imprima os primeiros 10 números primos. */
echo "<br>";
echo "EXERCÍCIO 1.7:";
echo "<br> <br>";

function isPrime($h) {
    if ($h <= 1) return false;
    for ($i = 2; $i <= sqrt($h); $i++) {
        if ($h % $i == 0) return false;
    }
    return true;
}

$count = 0;
$i = 2;
while ($count < 10) {
    if (isPrime($i)) {
        echo "$i ";
        $count++;
    }
    $i++;
}
echo "<br>";

/* Exercício 8:
Escreva um programa em PHP que calcule o fatorial de um número. */
echo "<br>";
echo "EXERCÍCIO 1.8:";
echo "<br> <br>";

$j = 3;
$fatorial = $j;
for ($k = $j - 1; $k > 0; $k--) {
    $fatorial *= $k;
}
echo "O fatorial de $j é $fatorial.";
echo "<br>";

/* Exercício 9:
Escreva um programa em PHP que verifique se um número é primo. */
echo "<br>";
echo "EXERCÍCIO 1.9:";
echo "<br> <br>";

$número = 23;
$primo = true;
for ($l = 2; $l <= sqrt($número); $l++)
{
if ($número % $l == 0)
{
$primo = false; break;
}
}
if ($primo)
{
echo $número . " é um número primo.";
} else {
echo $número . " não é um número primo.";
}
echo "<br>";

/* Exercício 10:
Escreva um programa em PHP que calcule a média dos elementos de um array. */
echo "<br>";
echo "EXERCÍCIO 1.10:";
echo "<br> <br>";

$notas = array(10, 8, 9.5, 7.5);
$soma = 0;
for ($o = 0; $o < count($notas); $o++) {
    $soma += $notas[$o];
}
$media = $soma / count($notas);
echo "A média é: " . $media;

?>