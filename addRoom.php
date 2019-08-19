<?php
require('vendor/autoload.php');

$order=new Hydroelectric;
$order->addRoom($_POST['roomName']);
header("Location:Hydroelectric.php?order={$_POST['order']}");
 ?>
