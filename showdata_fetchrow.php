<?php
require('dbconnect.php');

$sql = "SELECT * FROM employees";
$result=mysqli_query($connect,$sql);

$row=mysqli_fetch_row($result);
echo "รหัสพนักงาน = ".$row[0]."<br>";
echo "ชื่อ = ".$row[1]."<br>";
echo "นามสกุล = ".$row[2]."<br>";
echo "เพศ = ".$row[3]."<br>";
echo "ทักษะ = ".$row[4]."<br>";
echo "<hr>";

$row=mysqli_fetch_row($result);
echo "รหัสพนักงาน = ".$row[0]."<br>";
echo "ชื่อ = ".$row[1]."<br>";
echo "นามสกุล = ".$row[2]."<br>";
echo "เพศ = ".$row[3]."<br>";
echo "ทักษะ = ".$row[4]."<br>";
echo "<hr>";

$row=mysqli_fetch_row($result);
echo "รหัสพนักงาน = ".$row[0]."<br>";
echo "ชื่อ = ".$row[1]."<br>";
echo "นามสกุล = ".$row[2]."<br>";
echo "เพศ = ".$row[3]."<br>";
echo "ทักษะ = ".$row[4]."<br>";
echo "<hr>";

$row=mysqli_fetch_row($result);
echo "รหัสพนักงาน = ".$row[0]."<br>";
echo "ชื่อ = ".$row[1]."<br>";
echo "นามสกุล = ".$row[2]."<br>";
echo "เพศ = ".$row[3]."<br>";
echo "ทักษะ = ".$row[4]."<br>";
echo "<hr>";

$row=mysqli_fetch_row($result);
echo "รหัสพนักงาน = ".$row[0]."<br>";
echo "ชื่อ = ".$row[1]."<br>";
echo "นามสกุล = ".$row[2]."<br>";
echo "เพศ = ".$row[3]."<br>";
echo "ทักษะ = ".$row[4]."<br>";
echo "<hr>";
?>