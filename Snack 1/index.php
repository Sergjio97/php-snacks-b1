<?php
    /* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, 
    punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 */

    $partite = [

        [
            "squadraCasa" => "Olimpia Milano",
            "puntiCasa" => 55,
            "squadraOspite" => "Cantù",
            "puntiOspite" => 60
        ],

        [
            "squadraCasa" => "Trieste",
            "puntiCasa" => 83,
            "squadraOspite" => "Reggiana",
            "puntiOspite" => 85
        ],

        [
            "squadraCasa" => "Brescia",
            "puntiCasa" => 88,
            "squadraOspite" => "Brindisi",
            "puntiOspite" => 67
        ],

        [
            "squadraCasa" => "Basket Napoli",
            "puntiCasa" => 86,
            "squadraOspite" => "Fortitudo Bologna",
            "puntiOspite" => 89
        ],

        [
            "squadraCasa" => "Sassari",
            "puntiCasa" => 88,
            "squadraOspite" => "Trento",
            "puntiOspite" => 80
        ],

    ];

    /*for($i = 0; $i < count($partite); $i++) {
        echo $partite[$i]["squadraCasa"].' - '.$partite[$i]["squadraOspite"];     
    }*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
            for($i = 0; $i < count($partite); $i++){
                echo    "<li>
                            {$partite[$i]['squadraCasa']} - {$partite[$i]['squadraOspite']} | {$partite[$i]['puntiCasa']} - {$partite[$i]['puntiOspite']}
                        </li>";
            }
        ?>
    </ul>
</body>
</html>