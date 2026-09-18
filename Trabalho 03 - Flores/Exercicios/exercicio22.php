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
Descritivo: Escreva um programa que leia o valor do saldo de uma aplicacao bancaria e exiba o novo saldo reajustado com um acrescimo de 2%.
*******************************************************************************/
$saldo = 1500.00;
$novoSaldo = $saldo * 1.02;

echo "Saldo original: R$ " . number_format($saldo, 2, ',', '.') . "\n";
echo "Novo saldo reajustado (com 2%): R$ " . number_format($novoSaldo, 2, ',', '.') . "\n";
/*Resumindo:Esse sistema lê o valor do saldo de uma aplicação, aplica um acréscimo de multiplicando por 1.02 e exibe o novo saldo reajustado.*/
?>
