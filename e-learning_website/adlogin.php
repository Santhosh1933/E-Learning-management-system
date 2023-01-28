<?php

session_start();
include "conn.php";

if(isset($_POST["submit"])){
    $regno=$_POST["regno"];
    $pass=$_POST["pass"];


    $res=$conn->query("select * from advisor where regno='$regno' and password='$pass'");
    if($res->num_rows>0){
        $row=$res->fetch_assoc();
        $_SESSION["name"]=$row['name'];
        $id=$row['id'];
        header("Location:http://localhost:8080/e-learning_website/advisor_home.jsp?id=$id");
    }
    else{
        header("Location:http://localhost:8080/e-learning_website/index.jsp");
    }
}
?>