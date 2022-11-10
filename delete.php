<?php
  include("class/dbconnection.php");
include("class/controller.php");
include("class/test.php");

$del_id = $_POST['del_id'];
$ob = new test();

$del = $ob->del($del_id);
?>