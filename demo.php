<?php
$conn = new mysqli("localhost","root","17036673");

if ($conn->connect_error){
						die("连接失败". $conn->connect_error);
						}
echo "连接成功";
?>
