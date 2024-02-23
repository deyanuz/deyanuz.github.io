<?php
$conn = mysqli_connect("localhost", "root", "", "webportfolio");
$sql = "SELECT * FROM `home` WHERE `home`.`id` = 1";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

$sqlAbout = "SELECT * FROM `about` WHERE `about`.`id` = 1";
$resultAbout = mysqli_query($conn, $sqlAbout);
$dataAbout = mysqli_fetch_assoc($resultAbout);


?>
