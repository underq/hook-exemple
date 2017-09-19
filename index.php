<?php

require __DIR__ . '/user.php';
require __DIR__ . '/A.php';
require __DIR__ . '/B.php';
require __DIR__ . '/C.php';

$a = new A();

print_r($a->user_add('toto'));