<?php
$conn = mysqli_connect('localhost', 'root', '', 'webportfolio');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$del_id =  $_REQUEST['id'];

$delete_query = "DELETE FROM skills where idx=$del_id";

$delete =  mysqli_query($conn, $delete_query);
//confirm deletion
if ($delete) {
    header("location: admin.php?deletion=success");
} else {
    echo "Error deleting data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
