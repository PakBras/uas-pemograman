<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $conn = mysqli_connect ("localhost", "root", "", "game");

    if(!$conn) {
        die("connection error".mysqli_connect_error());
    }
    echo "connection succesfull";

    ?>
</body>
<a name="nextsubmit.php"></a>
</html>