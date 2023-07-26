<?php

error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);

return[
    'db' => [
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'name' => 'pj',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];

?>