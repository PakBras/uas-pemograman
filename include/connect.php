<?php
$conn = mysqli_connect('localhost', 'root', '', 'game');
if ($conn) {
    echo "connected succesfully";
}else{
    echo (mysqli_error($conn));
}
?>