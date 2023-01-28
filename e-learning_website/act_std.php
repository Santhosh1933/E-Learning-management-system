<?php
include "conn.php";
$id = $_GET['act'];
$id1 = $_GET['id'];
echo $id;
$conn->query("insert into student select * from temp_details where id=$id");
$result = mysqli_query($conn, "DELETE FROM temp_details WHERE id=$id");
header("Location:http://localhost:8080/e-learning_website/active_std.jsp?id=$id1");
?>