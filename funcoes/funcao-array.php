<?php

declare(strict_types=1);

function mostrarNomes(array $nomes) : void {
    foreach ($nomes as $cadaNome) {
        echo "Nome: ".$cadaNome.PHP_EOL;
    }
}

mostrarNomes(['Joaquin', 'Luiza', 'Filomena']);

mostrarNomes('teste');

