<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelloBook</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><h4>HelloBook</h4></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Booking
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="bookhotel.php">Hotel</a></li>
              <li><a class="dropdown-item" href="bookresort.php">Resort</a></li>
            </ul>
          </li>
          
          </ul>
          <form class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" style="font-size:larger; font-family:sans-serif;" href="register.php"><b>Register</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="font-size:larger; font-family:sans-serif;" href="signin.php"><b>SIGN IN</b></a>
                </li>
            </ul>
        </form>
      </div>
    </div>
  </nav>
  <div class="container">
      <div class="row">
          <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://k6u8v6y8.stackpathcdn.com/blog/wp-content/uploads/2016/06/Best-Resorts-in-Hyderabad.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block bg-success">
                      <h3>Best Stay at best Price</h3>
                      <p>Enjoy Your Vacation With Us</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://assets.tivolihotels.com/image/upload/q_auto,f_auto/media/minor/tivoli/images/brand_level/footer/1920x1000/thr_aboutus1_1920x1000.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block bg-success">
                      <h3>Best Stay at best Price</h3>
                      <p>Enjoy Your Vacation With Us</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://static.toiimg.com/photo/66274130/Taj.jpg?width=748&resize=4" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                      <h3>Best Stay at best Price</h3>
                      <p>Enjoy Your Vacation With Us</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
          </div>
      </div>
  </div>
  <br><br>
  <div class="container">
      <div class="row">
          <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="card" style="width: 18rem;">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtIBJVCJ0lz_MLK_OFv-Pe-uxEisBFZf2gEA&usqp=CAU" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Hotels</h5>
                  <p class="card-text">2star,3star,4star,5star hotels are available in affordable price in all over india.</p>
                  <a href="bookhotel.php" class="btn btn-primary">Booking</a>
                </div>
              </div>
          </div>
          <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="card" style="width: 18rem;">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSddgZ-zLQ2o7RH31THV7ph2_Bu8vHW1sIxHw&usqp=CAU" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Resorts</h5>
                  <p class="card-text">We have a good number of well built Sea/lake side,hill top,forest resorts with best ever service.</p>
                  <a href="bookresort.php" class="btn btn-primary">Booking</a>
                </div>
              </div>
          </div>
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>    
</body>
</html>