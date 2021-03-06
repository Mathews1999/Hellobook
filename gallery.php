<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Gallery</title>
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
         
          </ul>
          
      </div>
    </div>
  </nav>
      <div class="container">       
      <table class="table">
        <h1>Hotels</h1>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            
          <div class="col ">
            <div class="card">
              <img src="https://www.pymnts.com/wp-content/uploads/2016/05/Hotel-Room-Secondary-Market.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Rooms</h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="https://hotelnewsnow.com/Media/Default/Images2020/Locations/20200630_operations_pools.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Pool</h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="https://d3d5bpai12ti8.cloudfront.net/wp-content/uploads/20200427113835/iStock-1163284610-1024x683.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Dinning</h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="https://member-photos-782-524.s3-ap-southeast-1.amazonaws.com/21681-1599743555-wm-hotel-green-park-chennai-banquet-hall-9.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Auditorium</h5>
              </div>
            </div>
          </div>
        </div>
    </table>
</div>
</div>
</div>
<div class="container">       
  <table class="table">
    <h1>Resorts</h1>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        
      <div class="col ">
        <div class="card">
          <img src="https://anantyaresorts.com/wp-content/uploads/2018/10/Anantya-Resorts-Walking-Deck-HR-2MB.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Lake Resorts</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="https://thumbor.thedailymeal.com/pK0rAI12AZEFUdiaYKzkYG_cOdU=/870x565/filters:focal(895x631:896x632)/https://www.theactivetimes.com/sites/default/files/2020/01/03/HERO_Twin_Farms.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Spa</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="https://www.travelogyindia.com/blog/wp-content/uploads/2019/10/Angsana-Oasis-Spa-and-Resort-Bangalore.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Luxury</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="https://www.ragamayamunnar.com/images/spandiniouter.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Classic</h5>
          </div>
        </div>
      </div>
    </div>
</table>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>    
</body>
</html>