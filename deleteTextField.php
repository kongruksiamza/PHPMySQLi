<?php
require("dbconnect.php");

$id=$_POST["idemployee"];

$sql="DELETE FROM employees WHERE id = $id";

$result=mysqli_query($connect,$sql);

if($result){
    header("location:index.php");
    exit(0);
}else{
    echo "เกิดข้อผิดพลาดเกิดขึ้น";
}

?>