<?php

$bandas = [
    'Dream theater',
    'Neo Pi Neo',
    'Exalta Samba'
];

echo '<ul>';

for ($n = 0; $n <= 2; $n++) {
    echo '<li>' . $bandas[$n] . '</li>';
}