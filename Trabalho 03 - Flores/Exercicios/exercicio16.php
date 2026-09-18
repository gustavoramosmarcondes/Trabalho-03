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
Descritivo: Escreva um programa que leia um numero inteiro positivo e exiba o dobro dele. Se o numero for negativo, informe o erro.
*******************************************************************************/

$numero = 3;
if ($numero >= 0) {
    $dobro = $numero * 2;
    echo "O dobro de $numero é: $dobro";
} else {
    echo "Erro: O número informado é negativo!";
}
/*Resumindo:Esse sistema verifica se um número inteiro é positivo ou igual a zero, calculando e exibindo o seu dobro caso seja verdadeiro, ou mostrando uma mensagem de erro caso seja negativo.*/
?>
