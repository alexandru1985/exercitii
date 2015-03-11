<?php

require '../siruri/user.php';

$joost = new User();
$joost->setPassword('fsdfds34ds');
var_dump($joost->getPassword());

$nick = new User();
$nick->email = 'nick@tutsplus.com';
$nick->password = '45%gf38';
var_dump($nick->login());

define('MINCARS',8); // functia define reprezinta o constanta