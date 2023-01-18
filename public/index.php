<?php
require_once '../vendor/autoload.php';

session_start();

$router = new Core\Router();
$router->execute();
