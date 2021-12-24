<?php
$con = mysqli_connect('localhost','root','','quotes');
$sql = "SELECT id FROM intern";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="intern.css">
    <title>Backend</title>
</head>
<body>
    <div><center>
        <div class="header">Quotes Of the Day <danger class="danger">Backend</danger></div>
        </center>
    </div>
    <section class="content">
        <div class="dashboard">
            <ol>
                <li>
                    <b><a href="backend.php">Dashboard</a></b>
                </li>
                <li>
                    <a href="view.php">View All the Quotes</a>
                </li>
                <li>
                    <a href="add.html">Add New Quotes</a>
                </li>
            </ol>
        </div>
        <div class="info">
            <center>            
                <h1>Welcome Admin</h1><br>
                <div class="count">
                    <center><?php echo $num; ?></center>
                </div>
                <br>
                <h2>Total Quotes Added</h2></center>
        </div>
    </section>
</body>
</html>