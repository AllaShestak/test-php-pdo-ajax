<?php

include("class/dbconnection.php");
include("class/controller.php");
include("class/test.php");


$ob = new test();

$rows = $ob->fetch();

echo json_encode($rows);




?>