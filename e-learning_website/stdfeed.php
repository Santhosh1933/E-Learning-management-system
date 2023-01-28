<?php
        include "conn.php";
        $id = $_GET['id'];
        $sec = $_GET['sec'];
        if (isset($_POST['submit'])) {
        $feed=$_POST["feed"];
        $opt=$_POST["opt"];
       
        
            $sql = "INSERT INTO feedback_ad (feedback, class, subject,sid)
            VALUES ('$feed','$sec','$opt','$id')";
                       
            if ($conn->query($sql) === TRUE) {
                header("Location:http://localhost:8080/e-learning_website/std_feedback.jsp?id=$id&sec=$sec");
            }
            else{
        echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
            

           
?>