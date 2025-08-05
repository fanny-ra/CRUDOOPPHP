<?php

include("classes/User.php");

$user = new User("localhost", "root", "", "authoop58");
var_dump($user->getAll());

?>