<?php
// เชื่อมต่อฐานข้อมูล
require('dbconnect.php');

// รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
$fname=$_POST["fname"]; 
$lname= $_POST["lname"];
$gender=$_POST["gender"];

$emskill=implode(",",$_POST["skills"]); // array=> string

// บันทึกข้อมูล
$sql = "INSERT INTO employees(fname,lname,gender,skills) VALUES('$fname','$lname','$gender','$emskill')";

$result=mysqli_query($connect,$sql); // สั่งรันคำสั่ง sql

if($result){
    header("location:index.php");
    exit(0);
}else{
    echo myqli_errors($connect);
}

?>