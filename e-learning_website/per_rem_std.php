<?php
include "conn.php";
$id = $_GET['rem'];
$id1 = $_GET['id'];
echo $id;
$result = mysqli_query($conn, "DELETE FROM faculty WHERE id=$id");
$result = mysqli_query($conn, "DELETE FROM subjects WHERE id=$id");
header("Location:http://localhost:8080/e-learning_website/view_fac.jsp?id=$id1");
?>