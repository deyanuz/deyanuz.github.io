<?php
$conn = mysqli_connect("localhost", "root", "", "webportfolio");
$sql = "SELECT * FROM `home` WHERE `home`.`id` = 1";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

$sqlEducation = "SELECT * FROM `education`";
$resultEducation = mysqli_query($conn, $sqlEducation);


$sqlContact = "SELECT * FROM `contact` WHERE `contact`.`id` = 1";
$resultContact = mysqli_query($conn, $sqlContact);
$dataContact = mysqli_fetch_assoc($resultContact);

$sqlMessage = "SELECT * FROM `message`";
$resultMessage = mysqli_query($conn, $sqlMessage);

$sqlSkills = "SELECT * FROM `skills`";
$resultSkills = mysqli_query($conn, $sqlSkills);

$sqlWorks = "SELECT * FROM `work`";
$resultWorks = mysqli_query($conn, $sqlWorks);


?>