<?php
include 'include/connect.php';
if(isset($_POST['submit'])){
    $nama_game=$_POST['nama_game'];
    $jenis_game=$_POST['jenis_game'];
    $developer=$_POST['developer'];

    $sql="INSERT INTO gamereq (nama_game,jenis_game,developer) values('$nama_game','$jenis_game','$developer')";
    $result=mysqli_query($con,$sql);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Submit Your Game !</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">AoGames</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="games.php">Games</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="submit.php">Submit Your Game !</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="about.php">About</a></li>
                <li><a class="dropdown-item" href="creator.php">Creator</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="support.php">Support</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
<body>
<form method="post">
  <div class="form-group">
    <label>Nama Game</label>
    <input type="text" class="form-control" placeholder="Masukan Nama Game" name="nama_game" autocomplete="ogg">
  </div>
  <div class="form-group">
    <label>Jenis Game</label>
    <input type="text" class="form-control" placeholder="Masukan Jenis Game" name="jenis_game" autocomplete="ogg">
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