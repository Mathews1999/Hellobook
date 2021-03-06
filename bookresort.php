<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hotel Booking</title>
    <style>
      body {
        background-image: url('https://i.pinimg.com/originals/68/ae/cc/68aecc196d9f0d49a064c0abcb26a8ec.jpg');
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
          
      </div>
    </div>
  </nav>

  <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" style="text-align:center">
    <div class="card text-white bg-success mb-3" style="max-width: 23rem;">
        <div class="card-header"><h1>Resort Booking</h1></div>
        <div class="card-body">
          <table class="table table-borderless" >
            <tr>
                <td>Place</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>Type</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>Check In</td>
                <td><input type="datetime-local" class="form-control"></td>
            </tr>
            <tr>
              <td>Check out</td>
              <td><input type="datetime-local" class="form-control"></td>
          </tr>
          <tr>
              <td>No.of Persons</td>
              <td><input type="text" class="form-control"></td>
          </tr>
          <tr>
              <td>No.of Rooms</td>
              <td><input type="text" class="form-control"></td>
          </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-info">Book</button></td>
            </tr>
          </table>
     </div>
      </div>
  </div>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>       

      </body>
      </html>