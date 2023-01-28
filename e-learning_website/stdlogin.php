<?php

session_start();
include "conn.php";

if(isset($_POST["submit"])){
    $regno=$_POST["regno"];
    $pass=$_POST["password"];


    $res=$conn->query("select * from student where regno='$regno' and password='$pass'");
    $res1=$conn->query("select * from temp_details where regno='$regno' and password='$pass'");
    if($res->num_rows>0){
        $row=$res->fetch_assoc();
        $_SESSION["name"]=$row['name'];
        $id=$row['id'];
        header("Location:http://localhost:8080/e-learning_website/student_home.jsp?id=$id");
    }
    else if($res1->num_rows>0){
        $row=$res->fetch_assoc();
        header("Location:http://localhost:8080/e-learning_website/index.jsp?msg=waiting");
    }
    else{
        header("Location:http://localhost:8080/e-learning_website/index.jsp");
    }
}
?>