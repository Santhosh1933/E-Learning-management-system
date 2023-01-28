<?php
$conn=new mysqli("localhost","root","","e-learning_management_system");

if($conn->connect_error){
    echo "error";
}
$id = $_GET['id'];
$sec = $_GET['sec'];
$sub = $_GET['sub'];
if(isset($_POST["submit"]))
{
    $res=$conn->query("select * from faculty where id='$id'");
    $row=$res->fetch_assoc();
    $sub=$row['subject'];
    $name=$_POST["name"];
    $des=$_POST["des"];
    $target_dir="pdf/";
    $target_file=$target_dir.basename($_FILES["file"]["name"]);
    
    if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_file)){
        $sql="insert into pdf(title,des,file,subject,class) values ('{$_POST["name"]}','{$_POST["des"]}','{$target_file}','$sub','$sec')";
        $conn->query($sql);  
        header("Location:http://localhost:8080/e-learning_website/upload_pdf.jsp?id=$id&sec=$sec&sub=$sub");
    }
    else{
        echo "Error";
    }
}
?>