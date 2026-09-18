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
Descritivo: Escreva um programa que leia dois numeros inteiros (dividendo e divisor) e exiba na tela uma saida detalhada contendo: Dividendo, Divisor, Quociente (inteiro) e Resto da divisao.
*******************************************************************************/
$dividendo = 17;
$divisor = 5;
$quociente = intdiv($dividendo, $divisor);
$resto = $dividendo % $divisor;

echo "Dividendo: $dividendo \n";
echo "Divisor: $divisor \n";
echo "Quociente (inteiro): $quociente \n";
echo "Resto da divisão: $resto \n";
/*Resumindo:Esse sistema lê o dividendo e o divisor informados e mostra na tela o dividendo, o divisor, o quociente inteiro e o resto da divisão.*/
?>

