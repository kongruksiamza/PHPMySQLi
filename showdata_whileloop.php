<?php
require('dbconnect.php');
$sql = "SELECT * FROM employees";
$result=mysqli_query($connect,$sql);

while($row=mysqli_fetch_assoc($result)){
    echo "รหัสพนักงาน = ".$row["id"]."<br>";
    echo "ชื่อ = ".$row["fname"]."<br>";
    echo "นามสกุล = ".$row["lname"]."<br>";
    echo "เพศ = ".$row["gender"]."<br>";
    echo "ทักษะ = ".$row["skills"]."<br>";
    echo "<hr>";
}

?>