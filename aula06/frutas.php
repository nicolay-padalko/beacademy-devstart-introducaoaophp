<?php

$frutas = [
    'Laranja',
    'Banana',
    'Abacaxi',
];

$frutas[] = 'Maça';

$frutas[10] = 'Melancia';

$frutas[7] = 'Morango';

$frutas[] = 'Tangerina';

?>

<ul>
    <li>
        <?php

        for ($i = 0; $i < 12; $i++) {
            if ( isset ($frutas[$i])) {
                echo $frutas[$i];
                echo "\n";
            } else {
                echo " ";
            }

        }
        ?>
    </li>


</ul>
