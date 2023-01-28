<?php

session_start();
include "conn.php";

if(isset($_POST["submit"])){
    $regno=$_POST["emp_id"];
    $pass=$_POST["pass"];

echo $regno;
echo $pass;
    $res=$conn->query("select * from faculty where regno='$regno' and password='$pass'");
    if($res->num_rows>0){
        $row=$res->fetch_assoc();
        $_SESSION["name"]=$row['name'];
        $id=$row['id'];
        header("Location:http://localhost:8080/e-learning_website/faculty_home.jsp?id=$id");

    }
    else{

        echo $regno;
        echo $pass;
        header("Location:http://localhost:8080/e-learning_website/faculty.jsp");
    }
}
?>