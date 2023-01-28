<?php
include "conn.php";
$id = $_GET['rem'];
$id1 = $_GET['id'];
echo $id;
$result = mysqli_query($conn, "DELETE FROM temp_details WHERE id=$id");
header("Location:http://localhost:8080/e-learning_website/active_std.jsp?id=$id1");
?>