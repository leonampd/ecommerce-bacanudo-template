<?php

include __DIR__ . '/vendor/autoload.php';

$pagarme = new PagarMe\Client('SUA_API_AQUI');

$transacao = $pagarme->transactions()->get([
    'id' => '6337423'
]);

echo $transacao->status;