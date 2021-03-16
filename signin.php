<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelloBook</title>
    <style>
        body {
          background-image: url('https://c4.wallpaperflare.com/wallpaper/921/708/937/best-hotels-travel-thailand-tourism-wallpaper-preview.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;  
          background-size: cover;
        }
        </style>
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
          <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" style="text-align:center;">
    <div class="card text-white bg-warning mb-3" style="max-width: 35rem;" >
        <div class="card-header"><h1>Sign In</h1></div>
        <div class="card-body">
          <table class="table table-borderless" >
            
            <tr>
                <td>Username</td>
                <td><input type="text" class="form-control"></td>
                
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" class="form-control"></td>
            </tr>
            
            <tr>
                <td></td>
                <td><button class="btn btn-info">Sign In</button></td>
            </tr>
          </table>
          </div>
     </div>
      </div>
  </div>
</div>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>       

  </body>
  </html>