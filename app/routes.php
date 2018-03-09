<?php

$f3->set('ONERROR', function ($f3) {
    $error = $f3->get('ERROR');
    echo '{"code":'.$error['code'].', "status":"'.$error['status'].'"}';
});

$f3->route('GET /GR/api', function ($f3) {
    $json = '[{"firstname":"Jack","lastname":"Thumb","age":25},{"firstname":"Struan","lastname":"Forsyth","age":21}]';
    echo $json;
});
