<?php
$f3 = require_once('lib/base.php');

// Globale variable setting
$f3->set('DEBUG', 3);
$f3->set('AUTOLOAD', './app/');

header('Content-Type: application/json');

require_once './app/routes.php';

$f3->run();
