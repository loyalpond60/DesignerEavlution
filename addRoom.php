<?php
require('vendor/autoload.php');

$order=new Order;
$order->addRoom($_POST['roomName']);
header("Location:Hydroelectric.php?order={$_POST['order']}");
 ?>
