
<?php
include_once "../model/ConDB.php";
include_once "../model/Course.php";
$obj_name=new Course();
$rs2= $obj_name->getCourse();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">

<h1 class="text-center">ข้อมูลสมาชิกในระบบ</h1>
<hr>
<?php
print_r($rs2);
?>
<table class="table table-striped table-hover">
    <thead>
        
        <tr>
        <th>id</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>อีเมล</th>
        <th>รหัสผ่าน</th>
        <th>ตำเเหน่ง</th>
        <th>date</th>
        <th>แก้ไข</th>
        <th>delete</th>
    </tr>  
    </thead>


<tbody>

           <?php 
          foreach ($rs2 as $rs){
           ?>
    <tr>
    <td><?php echo $rs['id'];?></td>
        <td><?php echo $rs['firstname'];?></td>
        <td><?php echo $rs['lastname'];?></td>
        <td><?php echo $rs['email'];?></td>       
        <td><?php echo $rs['password'];?></td>
        <td><?php echo $rs['urole'];?></td>
        <td><?php echo $rs['created_at'];?></td>
        <td><a href="edit_form.php?id= <?php echo $row['id']; ?>" class="btn btn-primary">Edit</a></td></td>
        <td> <a href="?delete_id= <?php echo $row["id"]; ?>" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">Delete</a></td>
        <form action="multipleDelete.php"method="POST"> 
        <td> <input type="checkbox"name="idcheckbox[]"value="<?php echo $row['id'];?>"></td>  
       
    </tr>
    <?php }?>
</tbody>
</table>

<a href=""class="btn btn-primary">บันทึกข้อมูล</a>
<input type="submit"value="ลบข้อมูล"class="btn btn-danger">




</div>
</body>

</html>