<?php
require_once("vendor/autoload.php");
$system=new System;
$system->addOrder($_POST['orderNum'],$_POST['name']);

 ?>
