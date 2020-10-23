<?php
require('dbconnect.php');

$sql = "SELECT * FROM employees";
$result=mysqli_query($connect,$sql);

$row=mysqli_fetch_array($result,MYSQLI_BOTH);

echo "รหัสพนักงาน = ".$row["id"]."<br>";
echo "ชื่อ = ".$row[1]."<br>";
echo "นามสกุล = ".$row[2]."<br>";
echo "เพศ = ".$row["gender"]."<br>";
echo "ทักษะ = ".$row["skills"]."<br>";
echo "<hr>";

$row=mysqli_fetch_array($result,MYSQLI_BOTH);

echo "รหัสพนักงาน = ".$row["id"]."<br>";
echo "ชื่อ = ".$row[1]."<br>";
echo "นามสกุล = ".$row[2]."<br>";
echo "เพศ = ".$row["gender"]."<br>";
echo "ทักษะ = ".$row["skills"]."<br>";
echo "<hr>";

$row=mysqli_fetch_array($result,MYSQLI_BOTH);

echo "รหัสพนักงาน = ".$row["id"]."<br>";
echo "ชื่อ = ".$row[1]."<br>";
echo "นามสกุล = ".$row[2]."<br>";
echo "เพศ = ".$row["gender"]."<br>";
echo "ทักษะ = ".$row["skills"]."<br>";
echo "<hr>";

?>