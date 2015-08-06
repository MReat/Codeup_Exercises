<?php

require_once 'User.php';

$userFind = User::find(1);
$userAll = User::all();

$user1 = new User();
$user1->first_name = 'Jane';
$user1->last_name = 'Doe';
$user1->save();

var_dump($userFind);
