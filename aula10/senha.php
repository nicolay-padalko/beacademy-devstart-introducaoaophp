<?php

$senha = '123456';
$code = 'MTIzNDU2';

echo senha . phpbase64_encode($senha);
echo senha . phpbase64_decode($code);