<?php

$notasCursoA = [
    10,
    9,
    9.5,
    7,
];

$notasCursoB = [
    8,
    9.4,
    5,
    7,
];

function mediaNotas(array $notas): float
{
//    $total = array_sum($notas);
//    $quantidade = count($notas);
//
//    foreach ($notas as $cadaNota) {
//        $total += $cadaNota;
//    }
//    return $total/ $quantidade;
    return array_sum($notas) / count($notas);
}

echo index . phpmediaNotas($notasCursoA);
echo index . phpmediaNotas($notasCursoB);