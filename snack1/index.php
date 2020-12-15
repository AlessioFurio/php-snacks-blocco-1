<?php

    $matches = [
            [
                'casa' => 'Juve',
                'ospite' => 'Milan',
                'puntiCasa' => 2,
                'puntiOspite' => 0
            ],

            [
                'casa' => 'Juve',
                'ospite' => 'Inter',
                'puntiCasa' => 1,
                'puntiOspite' => 1
            ],

            [
                'casa' => 'Juve',
                'ospite' => 'Roma',
                'puntiCasa' => 1,
                'puntiOspite' => 2
            ],

    ];

    var_dump($matches);

    $i = 0; // inizzializzo contatore
    while ($i < count($matches)){

        echo ('Partita numero' . ' ' . ($i+1) . ':' . ' ' . ($matches[$i]['casa']) . ' - ' . ($matches[$i]['ospite']) . ' | ' . ($matches[$i]['puntiCasa']) . ' - ' . ($matches[$i]['puntiOspite']) . "<br>");
        $i++; // incremento
    }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

    </body>
</html>
