<?php

/* Questão 1:
Situação: Você está fazendo uma contagem regressiva antes de decolar em um foguete
espacial. Imprima os segundos restantes até o lançamento, começando em 10 e indo até 1. */
echo "EXERCÍCIO 2.1";
echo "<br> <br>";

for ($a=10; $a>0; $a--) {
    echo "Faltam $a segundos para a decolagem.";
    echo "<br>";
}
if ($a==0) {
    echo "Foguete decolado!";
}

/* Questão 2:
Situação: Você está fazendo uma rotina de exercícios e deseja contar o número de repetições restantes para cada exercício. Imprima o número de repetições restantes para
cada série, começando em 15 e indo até 1. */
echo "<br> <br>";
echo "EXERCÍCIO 2.2";
echo "<br> <br>";

for ($b=15; $b>0; $b--) {
    echo "$b exercícios restantes.";
    echo "<br>";
}
if ($b==0) {
    echo "Exercícios completos!";
}

/* Questão 3:
Situação: Você está cozinhando um bolo e precisa de uma contagem regressiva para o tempo de cozimento. Imprima os minutos restantes, começando em 60 e indo até 1. */
echo "<br> <br>";
echo "EXERCÍCIO 2.3";
echo "<br> <br>";

for ($c=60; $c>0; $c--) {
    echo "Restam $c minutos para o bolo ficar pronto.";
    echo "<br>";
}
if ($c==0) {
    echo "Bolo pronto!";
}

/* Questão 4:
Situação: Você está organizando uma festa de Ano Novo e deseja fazer uma contagem
regressiva para a meia-noite. Imprima os segundos restantes até a meia-noite, começando
em 60 e indo até 1. */
echo "<br> <br>";
echo "EXERCÍCIO 2.4";
echo "<br> <br>";

for ($d=60; $d>0; $d--) {
    echo "Restam $d segundos até o ano novo!";
    echo "<br>";
}
if ($d==0) {
    echo "Feliz ano novo!";
}

/* Questão 5:
Situação: Você está fazendo uma rotina de alongamento e deseja contar o tempo restante
para cada posição. Imprima os segundos restantes para cada posição de alongamento,
começando em 30 e indo até 1. */
echo "<br> <br>";
echo "EXERCÍCIO 2.5";
echo "<br> <br>";

for ($e1=30; $e1>0; $e1--) {
    echo "Restam $e1 segundos na primeira posição.";
    echo "<br>";
}

echo "<br>";

for ($e2=30; $e2>0; $e2--) {
    echo "Restam $e2 segundos na segunda posição.";
    echo "<br>";
} 
if ($e1.$e2==0) {
    echo "Alongamentos finalizados!";
}

/* Questão 6:
Situação: Você está fazendo um cronômetro regressivo para um desafio de velocidade.
Imprima os segundos restantes antes de começar a contagem regressiva, começando em
10 e indo até 1. */

echo "<br> <br>";
echo "EXERCÍCIO 2.6";
echo "<br> <br>";

for ($f=10; $f>0; $f--) {
    echo "Restam $f segundos até a contagem.";
    echo "<br>";
}
if ($f==0) {
    echo "Contagem iniciada!";
}

/* Questão 7:
Situação: Você está programando um temporizador para a hora de dormir e deseja fazer
uma contagem regressiva para desligar as luzes. Imprima os minutos restantes até a hora
de dormir, começando em 30 e indo até 1. */

echo "<br> <br>";
echo "EXERCÍCIO 2.7";
echo "<br> <br>";

for ($g=30; $g>0; $g--) {
    echo "Restam $g minutos até as luzes serem apagadas.";
    echo "<br>";
}
if ($g==0) {
    echo "Luzes apagadas!";
}

/* Questão 8:
Situação: Você está ensinando uma criança a contar e deseja imprimir uma sequência
regressiva para praticar. Imprima os números de 20 a 1. */
echo "<br> <br>";
echo "EXERCÍCIO 2.8";
echo "<br> <br>";

for ($h=20; $h>=1; $h--) {
    echo "Número $h.";
    echo "<br>";
}

/* Questão 9:
Situação: Você está fazendo uma tarefa de organização e deseja fazer uma contagem
regressiva para o término. Imprima os minutos restantes para concluir a tarefa, começando
em 60 e indo até 1. */
echo "<br> <br>";
echo "EXERCÍCIO 2.9";
echo "<br> <br>";

for ($i=60; $i>0; $i--) {
    echo "Restam $i minutos até todas as tarefas serem concluídas.";
    echo "<br>";
}
if ($i==0) {
    echo "Tarefas concluídas!";
}

/* Questão 10:
Situação: Você está programando um sistema de alarme para acordar pela manhã e deseja
fazer uma contagem regressiva até o horário desejado. Imprima os minutos restantes até o
horário de acordar, começando em 30 e indo até 1 */
echo "<br> <br>";
echo "EXERCÍCIO 2.10";
echo "<br> <br>";

for ($j=30; $j>0; $j--) {
    echo "Restam $j minutos até o alarme tocar.";
    echo "<br>";
}
if ($j==0) {
    echo "Hora de acordar!";
}

?>