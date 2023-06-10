<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AoGames</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <a name="atas"></a>  
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
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Media/The Silent.png" class="d-block w-100" alt="The Silent">
          </div>
          <div class="carousel-item">
            <img src="Media/Gray Day.png" class="d-block w-100" alt="Gray Day">
          </div>
          <div class="carousel-item">
            <img src="Media/Emerie Blue.png" class="d-block w-100" alt="Emerie Blue">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="Media/The Silent.png" class="card-img-top" alt="The Silent">
            <div class="card-body">
              <h5 class="card-title">The Silent</h5>
              <p class="card-text">A game about 2 guys trapped in the time.</p>
              <a href="the-silent.php" class="btn btn-primary">Go to page</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="Media/Gray Day.png" class="card-img-top" alt="Gray Day">
            <div class="card-body">
              <h5 class="card-title">Gray Day</h5>
              <p class="card-text">What would you do if you got bad day since you born ?</p>
              <a href="gray-day.php" class="btn btn-primary">Go to page</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="Media/Emerie Blue.png" class="card-img-top" alt="Emerie Blue">
            <div class="card-body">
              <h5 class="card-title">Emerie Blue</h5>
              <p class="card-text">A group of pirate trying to find the freedom.</p>
              <a href="emerie-blue.php" class="btn btn-primary">Go to page</a>
            </div>
          </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
  <footer>
    <nav class="navbar sticky-bottom bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#atas">Kembali Keatas</a>
        </div>
      </nav>
  </footer>
  <a name="index.php"></a>
</html>