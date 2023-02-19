<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Connnection</title>
</head>
<body>
    <?php
    $connection = mysqli_connect("localhost","root","", "start");
    if ($connection) {
        echo "database connect success!!!";
    }else{
        die("connection fail....");
    }
    ?>
</body>
</html>