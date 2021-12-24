<?php 
    $con = mysqli_connect('localhost','root','','quotes');
    $sql = "SELECT * FROM intern";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $out = strlen($row['link']) > 50 ? substr($row['link'],0,30)."..." : $row['link'];
    $num = mysqli_num_rows($result);
?>
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
            <h1>Welcome Admin</h1><br>
            <table>
                <tr>
                    <td>No</td>
                    <td>Quotes</td>
                    <td>Image Link</td>
                    <td>Author</td>
                </tr>
                <?php
                for($i=1;$i<=$num;$i++)
                {
                    $sql1 = "SELECT * FROM intern WHERE id=$i";
                    $result1 = mysqli_query($con,$sql1);
                    $row = mysqli_fetch_assoc($result1);
                    $out = strlen($row['link']) > 50 ? substr($row['link'],0,30)."..." : $row['link'];
                ?>
                    <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['quote']; ?></td>
                    <td><?php echo $out ?></td>
                    <td><?php echo $row['author'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </section>
</body>
</html>