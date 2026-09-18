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
Descritivo: Ler idade e classificar para ver em qual categoria o nadador se encaixa.
*******************************************************************************/

$ano_nascimento = readline("Digite o ano de nascimento: ");
$ano_atual = 2026;

$idade = $ano_atual - $ano_nascimento;

if($idade >= 0 && $idade <= 4){
    echo"Nao aceito";
} else if($idade >= 5 && $idade <= 7){
    echo"Infantil A";
}  else if($idade >= 8 && $idade<= 10){
    echo"Infantil B";
}  else if($idade >= 11 && $idade<= 13){
    echo"Juvenil A";
}  else if($idade >= 14 && $idade<= 17){
    echo"Juvenil B";
} else if ($idade > 17){
    echo"Senior";
} else{
    echo "Idade invalida!";
}

