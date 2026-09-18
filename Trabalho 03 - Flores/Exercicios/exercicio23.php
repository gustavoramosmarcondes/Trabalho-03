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
Descritivo: Escreva um programa que leia o valor da base e da altura de um triangulo e calcule e exiba a sua area (Formula: Area = (Base * Altura) / 2).
*******************************************************************************/
$base = 10.0;

$altura = 6.0;

$area = ($base * $altura) / 2;

$resultadoFormatado = number_format($area, 2, ',', '.');

echo "A área do triângulo é: $resultadoFormatado\n";
/*Resumindo:Esse sistema lê o valor da base e da altura de um triângulo, calcula a área utilizando a fórmula padrão e exibe o resultado obtido.*/
?>
