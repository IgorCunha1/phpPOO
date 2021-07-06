<?php

require_once 'src/Conta.php';


$novaConta = new Conta('07625269477','Igor');

$novaConta->depositar(1600);

$contaDois = new Conta('11538731410', 'Larissa');


$novaConta->transferir(300,$contaDois);

/**
var_dump($novaConta);
*/