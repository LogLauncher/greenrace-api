<?php
$f3 = require_once('lib/base.php');

// Globale variable setting
$f3->set('DEBUG', 3);
$f3->set('AUTOLOAD', './app/');
$f3->config('./app/routes.ini');

$f3->set('ONERROR', function ($f3) {
    $error = $f3->get('ERROR');
    echo '{"code":'.$error['code'].', "status":"'.$error['status'].'"}';
});

header('Content-Type: application/json');

$f3->run();
