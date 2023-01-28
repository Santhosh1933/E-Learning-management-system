<?php
        include "conn.php";

        if (isset($_POST['submit'])) {
        $name=$_POST["name"];
        $opt=$_POST["opt"];
        $password=$_POST["pass"];
        $regno=$_POST["regno"];
       
        $ch ="SELECT * from temp_details where regno='$regno'";
        $res_ch=$conn->query($ch);
        if ($res_ch->num_rows>0) 
        {        
        echo "<script>alert('MAIL ID ALREADY EXIST');</script>";
        header("location:http://localhost:8080/e-learning_website/registration.jsp");

        } 
        else {
            $sql = "INSERT INTO temp_details (name, regno, password,opt)
            VALUES ('$name','$regno','$password','$opt')";
            
            if ($conn->query($sql) === TRUE) {
                header("location:http://localhost:8080/e-learning_website/index.jsp");
            }
            else{
        echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
            }

           
?>