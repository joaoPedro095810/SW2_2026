<?php
    for ($i=1; $i <= 5; $i++) { 
    echo $i;
    echo "<br>";

    }
    echo"<hr>";

    $nomes = ['FULANO','CICLANO','BELTRANO','JOTAPE','MARIA'];

    foreach ($nomes as $chave => $valor) {
        echo $valor . "<br>";
        
    }




    //echo $nomes;

    //$qtde = count($nomes);

    //for ($i=0; $i < 5; $i++) {
        //echo $nomes[$i];
        //echo "<br>";

    //}

    echo"<hr>";