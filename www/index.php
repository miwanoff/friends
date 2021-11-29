<?php
$baseDir = realpath(dirname(__FILE__) . '\..');
include $baseDir . '\lib\controller\FrendController.php';
$controller = new FrendController();
$controller->invoke();