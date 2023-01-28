<?php
        include "conn.php";
        $id = $_GET['id'];
        echo $id;
        if (isset($_POST['submit'])) {
        $name=$_POST["name"];
        $des=$_POST["des"];
        $sub=$_POST["subject"];
        $emp=$_POST["emp"];

        $opt=$_POST["opt"];
        $password=$_POST["password"];
       
        $ch ="SELECT * from faculty where regno='$emp'";
        $res_ch=$conn->query($ch);
        if ($res_ch->num_rows>0) 
        {        
        echo "<script>alert('MAIL ID ALREADY EXIST');</script>";
        header("location:http://localhost:8080/e-learning_website/create_fac.jsp?id=$id");
        } 
        else {
            $sql = "INSERT INTO faculty (name, regno, password,designation,class,subject)
            VALUES ('$name','$emp','$password','$des','$opt','$sub')";
                        $sql1 = "INSERT INTO subjects (sub_name,fac_name,class)
                        VALUES ('$sub','$name','$opt')";
                        $conn->query($sql1);
            if ($conn->query($sql) === TRUE) {
                header("location:http://localhost:8080/e-learning_website/create_fac.jsp?id=$id");
            }
            else{
        echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
            }

           
?>