<?php
    $con = mysqli_connect('localhost','root','','quotes');
    $query = "SELECT * FROM intern ORDER BY RAND()";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="intern.css">
    <title>Document</title>
</head>
<body bgcolor="#4B4D4D">
    <center><div class="header">Quotes Of the Day</div></center>
    <center><div class="a"><h1>Quotes of the Day</h1></div></center>
    <center><div class="a"><h3>Daily Wisdow brought to you by forbes</h3></div></center>
    <center><div class="quote"><?php echo $row['quote'];?></div></center>
    <center><div class="profile"><img class="image" src="<?php echo $row['link'];?>"><b color="white" class="author"><?php echo $row['author'];?></b></div></center>
</body>
</html>