<?php
include 'include/connect.php';?>

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
    <br><div class="container border">
    <br><h1 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size: 25px; text-align: center;">LIST GAME</h1>
    <table class="table table-hover table-bordered" style="justify-content: center; border:#808080;">
      <thead class="thead table-secondary" style="text-align: center;">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nama Game</th>
          <th scope="col">Jenis Game</th>
          <th scope="col">Developer</th>
          <th scope="col">Act</th>
        </tr>
      </thead>
      <tbody>

      <?php
      $sql = "SELECT * FROM gamereq";
      $result = mysqli_query($con, $sql);
      
      if ($result) {
          while($row = mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $nama_game=$row['nama_game'];
            $jenis_game=$row['jenis_game'];
            $developer=$row['developer'];
            echo '<th scope="row">'.$id.'</th>
            <td>'.$nama_game.'</td>
            <td>'.$jenis_game.'</td>
            <td>'.$developer.'</td>
            <td>
            <button type="button" class="btn btn-primary" href="ubah.php">Ubah</button>
            <button class="btn btn-danger"><a href=delete.php?deleteid='.$id.'>Hapus</a></button>
            </td>
            </tr>';
          }
      }

    ?>
        
        
      </tbody>
    </table>
    <h1 style="text-align:right; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><button type="button" class="btn btn-primary"><a href="nextsubmit.php" style="color: aliceblue; text-decoration: none;">Submit Game</button></a></h1> 
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
  <a name="submit.php"></a>
</html>