<?php
/*******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Tecnicas de Programacao
Professor: Flores
Turma: ESOFT-2
Componentes:
              260140792 - Gustavo Ramos Marcondes
              260052892 - Marcio Jose Aguiar Filho
              260071312 - Gabriel Felipe Albano Grendel
              260081732 - Alan Cristian dos Santos Costa
              260103602 - Victor Asaf Antunes dos Santos
Data: 19 de Setembro de 2026
Descritivo: Escreva um programa que leia quatro numeros inteiros e calcule a media ponderada deles, considerando que os pesos associados a cada numero sao, respectivamente, 1, 2, 3 e 4.
*******************************************************************************/
$num1 = 5;
$num2 = 7;
$num3 = 8;
$num4 = 10;

$peso1 = 1;
$peso2 = 2;
$peso3 = 3;
$peso4 = 4;

$somaProdutos = ($num1 * $peso1) + ($num2 * $peso2) + ($num3 * $peso3) + ($num4 * $peso4);
$somaPesos = $peso1 + $peso2 + $peso3 + $peso4;
$mediaPonderada = $somaProdutos / $somaPesos;

echo "A média ponderada é: $mediaPonderada\n";
/*Resumindo:Esse sistema lê quatro números inteiros, multiplica cada um pelos seus respectivos pesos, divide a soma total dos produtos pela soma dos pesos e exibe a média ponderada resultante.*/
?>
