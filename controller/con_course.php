<?php 
$firstname="images/12.png";
$cs_name="อบรมเชิงปฏิบัติการ<br/>การผลิตปุ๋ยมูลไส้เดือนดินเพื่อกำจัดขยะอินทรีย์และเพื่อการค้า";
$cs_date="30-31 ก.ค. 65";
$cs_wallet="1,990 บ.";
?>

<?php
$course=array();
$course["firstname"]=$firstname;
$course["lastname"]=$lastname;
$course["gmail"]=$gmail;
$course["password"]=$password;
$course["urole"]=$urole;
$course["create_at"]=$create_at;

print_r($course);
?>

<?php
include_once "../model/ConDB.php";
include_once "../model/Course.php";
$obj_name=new Course();
echo $rs2= $obj_name->addCourse($course);
?>

<?php
include "../view/manage_users.php";
?>
