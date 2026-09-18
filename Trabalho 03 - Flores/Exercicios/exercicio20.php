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
Descritivo: Escreva um programa que leia uma data no formato ddmmaa (ex: 250826) e exiba a mesma data reorganizada no formato mmddaa.
*******************************************************************************/
$dataOriginal = "120108";

$dia = substr($dataOriginal, 0, 2);
$mes = substr($dataOriginal, 2, 2);
$ano = substr($dataOriginal, 4, 2);

$dataReorganizada = $mes . $dia . $ano;

echo "Data original: $dataOriginal\n";
echo "Data reorganizada (mmddaa): $dataReorganizada\n";
/*Resumindo:Esse sistema lê uma string de data no formato ddmmaa, extrai separadamente o dia, o mês e o ano, e os junta em uma nova ordem para exibi-la no formato mmddaa.*/
?>
