<?php
$f3 = require('lib/base.php');
// Globale variable setting
$f3->set('DEBUG', 3);
$f3->set('UI', './app/views/');

// Routes
$f3->route(
    'GET /api',
    function ($f3) {
        $f3->set('title', 'This is the best title ever !!');
        echo \Template::instance()->render('layout.html');
    }
);

$f3->run();
