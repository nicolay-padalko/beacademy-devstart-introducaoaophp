<?php

$a1 =
    [
        'nome' => 'Chiquin',
        'email' => 'chiquin@email.com',
        'telefone' => '11-99945-5412',
        'notas' => [
            9,
            5.1,
            7.5,
            8,
        ]
    ];
$a2 =
    [
        'nome' => 'Maria',
        'email' => 'maria@mail.com',
        'telefone' => '33-23456-7868',
        'notas' => [
            9,
            5.1,
            7.5,
            8,
        ]
    ];
$alunos =
    [
        $a1,
        $a2,
    ];
?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <h1 class="mt-5"> Alunos </h1>
    <hr>
    <table class="table table-hover table-striped mt-5">
        <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
        </thead>

        <tbody>
        <?php
        foreach ($alunos as $cadaAluno) {
            echo '<tr>';
            echo '<td>' . @$cadaAluno['nome'] . '</td>';
            echo '<td>' . @$cadaAluno['email'] . '</td>';
            echo '<td>' . @$cadaAluno['telefone'] . '</td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>

