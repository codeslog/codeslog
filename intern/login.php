<?php
    $con = mysqli_connect('localhost','root','','quotes');

    if($_POST['submit'])
    {
        $user = $_POST['user'];
        $pwd = $_POST['pwd'];

        $sql = "SELECT id from login WHERE user='$user' and password='$pwd'";
        $result = mysqli_query($con,$sql);

        $num = mysqli_num_rows($result);
        if($num == 1)
        {
            header("location:http://localhost/intern/backend.php");
        }
    }
?>