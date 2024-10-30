<?php

    $nota1 = 3;
    $nota2 = 4;
    $nota3 = 7;
    $nota4 = 1;

    $media = ($nota1 + $nota2 + $nota3 +$nota4)/4;

    if($media >= 7){
        echo "Média $media. ALUNO APROVADO!!";
    }
    else if($media >= 4){
        // Exemplo de arredondamento.
        echo "Média: " . round($media). "ALUNO DE EXAME!!";
    }
    else {
        echo "Média $media. ALUNO REPROVADO.";
    }

?>