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
Descritivo: Escreva um programa que leia um numero inteiro de tres algarismos (de 100 a 999) e exiba o algarismo correspondente a casa das dezenas.
*******************************************************************************/
$numero = 863;
$dezena = intdiv($numero, 10) % 10;

echo "O algarismo da casa das dezenas de $numero é: $dezena\n";
/*Resumindo:Esse sistema lê um número de três algarismos, apaga a unidade dividindo por 10 e extrai o algarismo correspondente para a casa das dezenas usando o resto da divisão por 10.*/
?>

