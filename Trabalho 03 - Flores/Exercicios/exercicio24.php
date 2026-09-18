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
Descritivo: Escreva um programa que calcule e exiba o comprimento de uma circunferencia com base em seu raio fornecido pelo usuario. Defina PI como uma constante com valor 3.1415 (Formula: C = 2 * PI * Raio).
*******************************************************************************/
define("PI", 3.1415);

$raio = 5.0;

$comprimento = 2 * PI * $raio;

echo "O comprimento da circunferência é: $comprimento\n";
/*Resumindo:Esse sistema lê o valor do raio de uma circunferência, calcula o comprimento utilizando a constante PI e exibe o resultado obtido.*/
?>
