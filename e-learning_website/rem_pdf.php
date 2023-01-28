<?php
include "conn.php";
$rem = $_GET['rem'];
$id = $_GET['id'];
$sec = $_GET['sec'];
$sub = $_GET['sub'];
echo $id;
$result = mysqli_query($conn, "DELETE FROM pdf WHERE id=$rem");
header("Location:http://localhost:8080/e-learning_website/view_pdf.jsp?id=$id&sec=$sec&sub=$sub");
?>