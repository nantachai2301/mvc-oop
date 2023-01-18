<?php

 include_once "../model/ConDB.php";
 include_once "../model/User.php";
 $id = $_GET["id"];
 $obj_id = new User();
 $rs= $obj_id->delCourse($id);
?>


<?php
 include "../view/manage_users.php";
?>
