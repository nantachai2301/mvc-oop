<?php
include_once "../model/ConDB.php";
include_once "../model/User.php";
$obj_name=new User();
$rs2= $obj_name->getUser($course);

$obj_id = new User();
$rs= $obj_id->delCourse($id);

?>







<?php
include "../view/manage_users.php";
?>
