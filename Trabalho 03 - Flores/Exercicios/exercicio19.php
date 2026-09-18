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
Descritivo: Escreva um programa que leia uma string correspondente a uma data no formato ddmmaa (6 digitos, ex: 250826) e exiba o dia, mes e ano de forma separada.
*******************************************************************************/
$data = "120108";
$dia = substr($data, 0, 2);
$mes = substr($data, 2, 2);
$ano = substr($data, 4, 2);

echo "Dia: $dia\n";
echo "Mês: $mes\n";
echo "Ano: $ano\n";
/*Resumindo:Este sistema lê uma string de 6 dígitos de data e utiliza a função de fatiamento para extrair e exibir separadamente os dois primeiros caracteres como dia, os dois do meio como mês e os dois últimos como ano.*/
?>
