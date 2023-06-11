<?php
     $koneksi = mysqli_connect ("localhost", "root", "", "game");

    if(!$koneksi) {
        die("connection error".mysqli_connect_error());
    }

    ?>