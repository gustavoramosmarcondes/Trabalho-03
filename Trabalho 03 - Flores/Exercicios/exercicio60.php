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
Descritivo: Receber a quantidade de habitantes, ler a idade de cada um e calcular a media de idade dessa cidade!
*******************************************************************************/

$quantidade_habitantes = (int) readline("Digite a quantidade de habitantes: ");

$soma_idades = 0;
for($i = 0; $i < $quantidade_habitantes; $i++){
    $idade_habitantes = (int) readline("Digite a idade do habitante " . $i . " :");
    $soma_idades += $idade_habitantes;
}


if ($quantidade_habitantes > 0){
$media = $soma_idades / $quantidade_habitantes;
echo"A media de idade dessa cidade e: " . $media . " ";
} else {
    echo "Quantidade de habitantes invalido!";
}