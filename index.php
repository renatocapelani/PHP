    <?php
    //Comentários em PHP - Linha
    /*
    */
    //echo "Hello World - Meu nome é Renato Capelani";
    $idade = 36;
    $nome =  "Renato Capelani";
    $Altura = 1.82;
    //$solteiro = false;
    //echo $solteiro;
    //echo 10<12;
    CONST IDADE = 10;
    if(10>12){
        echo "Mentira";
    }
    else{
        echo "10 não é maior que 12";
    }

    $nota1 = 6;

    if ($nota1 >= 6){
        echo "Aprovado";
    }
    else if ($nota1 < 6 && $nota1 >=2){
        echo "Ainda tem chance";
    }

//Faça um if que calule a média e escreva na tela
//se foi aprovado ou não

        $notaA = 6;
        $notaB = 7;
        $media = ($notaA+$notaB)/2;

        //Operadores
        // /= XX $media mediá do mesmo valor dividido por qualquer outro valor
        // += XX $media mediá do mesmo valor somado por qualquer outro valor
        // -= XX $media mediá do mesmo valor subtraido por qualquer outro valor
        // *= XX $media mediá do mesmo valor multiplica por qualquer outro valor
        // == Atribuição
        // <= Menor Igual
        // >= Maior Igual
        // != Diferente
        // !== Diferente tipos iguais
        // === Igual tipos iguais
        // || OU ou OR
        // && E ou AND
        // % Resto
        // . Concatenar


        if ($media => 6){
            echo "Média Aprovado";
        }else{
            echo "Média Reprovado";
        }

    ?>