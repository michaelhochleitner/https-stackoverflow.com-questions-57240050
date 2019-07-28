<?php
require_once("UserModel.php");
require_once("Request.php");

$request = new Request();
$myClass = new UserModel($request);
echo $myClass->getName();
$myClass->setName("Jill");
echo "\n";
echo $myClass->getName();
echo "\n";
