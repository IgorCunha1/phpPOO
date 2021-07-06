<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';


$novaConta = new Conta(new Titular('IgorCunha','07625269477'));

$novaConta->depositar(1600);

$contaDois = new Conta(new Titular('Larissa','11538731410'));

echo "R$ ",$novaConta->getSaldo().PHP_EOL;


$novaConta->transferir(300,$contaDois);

echo Conta::getNumeroDeContas();

/**
var_dump($novaConta);
*/