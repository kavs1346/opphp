<?php
    
    $idade = filter_input(INPUT_POST,"idade");

    if($idade < 16) {
        echo "Não pode votar";
    } else if ( $idade >= 16 && $idade <= 18) {
        echo "Voto Facultativo";
    } else if ($idade >= 19 && $idade <= 65) {
        echo "voto obrigatorio";
    } else if ($idade > 65 && $idade <= 120) {
        echo "voto facultativo";
    } else {
        echo "";
    }

?>   
    

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Truco Paulista</title>
    </head>
    <body>
        <h1>Veja sua idade para votar:</h1>
            <form method="post" action="">
                <label for="idade">Idade: <input type="number" name="idade"/></label><br>
                <input type="submit" name="btnEnviar" value="Enviar">
    </body>
    </html>