<?php
    $con = mysqli_connect('localhost','root','','quotes');

    if($_POST['submit'])
    {
        $quotes = $_POST['quotes'];
        $link = $_POST['link'];
        $by = $_POST['by'];
        $sql = "INSERT INTO intern(quote,link,author) VALUES('$quotes','$link','$by')";
        $result = mysqli_query($con,$sql);
        echo $sql;
        if($result)
        {   
            header("location:http://localhost/intern/backend.php");
        }
    }
?>