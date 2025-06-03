<?php

use App\patrones\creacionales\prototype\User;

require __DIR__ . '/vendor/autoload.php';

$user1 = new User('BLCL','blcl@outlook.com');

$user2 = $user1->clone();
$user2->setName('MBCL');

echo $user1->getName();