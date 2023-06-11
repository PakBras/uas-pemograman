<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $nama_game=$_POST['nama game'];
    $jenis_game=$_POST['jenis game'];
    $developer=$_POST['developer'];

    $sql="insert into 'submit' (id,nama game,jenis,game,developer)
    values('$id','$nama_game','$jenis_game','$developer')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "connected succesfully";
    }else{
        echo (mysqli_error($conn));
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
  <div class="form-group">
    <label>ID</label>
    <input type="text" class="form-control" placeholder="Masukan id" name = "id" autocomplete="ogg">
  </div>
  <div class="form-group">
    <label>Nama Game</label>
    <input type="text" class="form-control" placeholder="Masukan Nama Game" name="nama game" autocomplete="ogg">
  </div>
  <div class="form-group">
    <label>Jenis Game</label>
    <input type="text" class="form-control" placeholder="Masukan Jenis Game" name="jenis game" autocomplete="ogg">
  </div>
  <div class="form-group">
    <label>Developer</label>
    <input type="text" class="form-control" placeholder="Masukan Nama Developer" name="developer" autocomplete="ogg">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</body>
<a name="nextsubmit.php"></a>
</html>