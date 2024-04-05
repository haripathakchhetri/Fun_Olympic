<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Olympic Website</title>
  <link rel="stylesheet" href="css\index.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 
</head>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<body>
  <!-- navbar start -->
  <nav class="navbar navbar-expand-md navbar navbar-light bg-primary"  >
    <div class="container">
      <a href="#" class="navbar-brand"><img src="img\logowithnobg.png" alt=""></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#mynav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active text-white" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link text-white " href="login.php">Broadcast</a></li>



        </ul>


        <ul class="navbar-nav ml-auto">
          <li class="nav-item mr-3"> <a class="nav-link text-white" href="register.php"><span class="fas fa-user"></span>
              Signup</a>
          </li>
          <li class="nav-item"> <a class="nav-link text-white" href="login.php"><span class="fas fa-sign-in-alt">
                Login</a> </li>
        </ul>
      </div>
    </div>

  </nav>

  <!-- navbar end -->

  <!-- slide start -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 " src="img\Stadium.jpg" alt="First slide">
        <div class="carousel-caption">
          <h3>Welcome to Beijing Olympic 2023</h3>
          <p>Experience the thrill, excellence, and unity of the world's best athletes.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img\Slide4.jpg" alt="Second slide">
        <div class="carousel-caption">
          <h3>Witness Sporting History</h3>
          <p>Join us in celebrating moments that will be etched in Olympic history forever.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img\Slide6.jpg" alt="Third slide">
        <div class="carousel-caption">
          <h3>Unleash the Olympic Spirit</h3>
          <p>Feel the passion, dedication, and unity as nations come together for the Beijing 2023 Olympics.
          </p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- Carousel End -->

  <!-- About Section Start -->
  <div class="container">
    <div class="row g-5 align-items-center mt-5">
      <div class="col-lg-6">
        <h2 class="section-title text-start text-danger twxt-uppercase">About</h2>
        <h3 class="text-primary">Our Mission </h3>
        <p class="mb-4">Our mission is to provide a comprehensive and engaging experience for sports enthusiasts
          and curious minds alike. Whether you're seeking the latest updates on Olympic events, exploring the
          history of the Games, or discovering the inspiring journeys of athletes from around the globe,
          you'll find it here. We invite you to join us in celebrating the timeless values of excellence,
          friendship, and respect that the Olympics embody.</p>
        <a href="about.php" class="btn btn-success py-md-3 px-md-5 me-3 mb-4 animated slideInLeft">Explore More</a>
      </div>
      <div class="col-lg-6">
        <div class="row g-3">
          <div class="col-6 text-end mb-4">
            <a href="img/ice_hockey.jpg"><img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s"
                src="img/ice_hockey.jpg" alt="About Image 1">
            </a>
          </div>
          <div class="col-6 text-start mb-4">
            <a href="img/boxing1.jpg"><img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                src="img/boxing1.jpg" alt="About Image 2"></a>
          </div>
          <div class="col-6 text-end mb-4">
            <a href="img/table_tennis.jpg"><img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                src="img/table_tennis.jpg" alt="About Image 3"></a>
          </div>

          <div class="col-6 text-start mb-4">
            <a href="img/ice_hockey.jpg"><img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s"
                src="img/running.jpg" alt="About Image 4"></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- About Section End -->


   <!-- games section start-->

   <section class="container-fluid py-5" id="games">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-dark text-uppercase">Games</h6>
                <h1 class="mb-5">Explore Our <span class="text-secondary">Games</span></h1>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <!-- Ice Hockey -->
                <div class="col wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card" style="width: 18rem;">
                        <img src="img/ice_hockey.jpg" class="card-img-top" alt="Football Image">
                        <div class="card-body">
                            <h5 class="card-title">Ice Hockey</h5>
                            <p class="card-text">Ice hockey is a Winter Olympics staple, featuring fast-paced gameplay on ice. It showcases top international teams competing for gold, drawing massive global viewership and passionate fan support.</p>
                           
                        </div>
                    </div>
                </div>


                <!-- Table Tennis -->
                <div class="col wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card" style="width: 18rem; ">
                        <img src="img/table_tennis.jpg" class="card-img-top" alt="Basketball Image">
                        <div class="card-body">
                            <h5 class="card-title">Table Tennis</h5>
                            <p class="card-text">Table tennis is a dynamic Olympic sport, played on a small table with paddles and a lightweight ball. It demands agility, precision, and strategy, captivating audiences with its fast-paced rallies and skillful play.</p>
                            
                        </div>
                    </div>
                </div>

                <!-- Boxing -->
                <div class="col wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card" style="width: 18rem;">
                        <img src="img/boxing1.jpg" class="card-img-top" alt="Swimming Image">
                        <div class="card-body">
                            <h5 class="card-title">Boxing</h5>
                            <p class="card-text">Boxing in the Olympics involves amateur fighters from various nations competing in weight classes. Matches are held under strict rules, showcasing skill, speed, and strategy, often producing memorable moments.</p>
                            
                        </div>
                    </div>
                </div>

                <!-- Tennis -->
                <div class="col wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card" style="width: 18rem;">
                        <img src="img/tennis.jpg" class="card-img-top" alt="Tennis Image">
                        <div class="card-body">
                            <h5 class="card-title">Tennis</h5>
                            <p class="card-text">
                                Tennis in the Olympics sees top-ranked players representing their countries in singles and doubles events. Matches are held on various surfaces, adding excitement to the competition, drawing global attention.</p>
                         
                        </div>
                    </div>
                </div>

                <!-- Tennis -->
                <div class="col wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card" style="width: 18rem;">
                        <img src="img/swimming.jpg" class="card-img-top" alt="Swimming Image">
                        <div class="card-body">
                            <h5 class="card-title">Swimming</h5>
                            <p class="card-text">Swimming is a highlight of the Summer Olympics, featuring various events from freestyle to butterfly strokes. Athletes compete for medals, showcasing incredible speed, endurance, and technique in the pool.</p>
                            
                        </div>
                    </div>
                </div>

                <!-- Running -->
                <div class="col wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card" style="width: 18rem;">
                        <img src="img/running.jpg" class="card-img-top" alt="Running Image">
                        <div class="card-body">
                            <h5 class="card-title">Running</h5>
                            <p class="card-text">Running is a core Olympic sport, encompassing various events like sprints, relays and marathons. Athletes showcase speed and technique, captivating audiences worldwide with their remarkable performances.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- games section end -->

    <!-- Footer Start -->
    <footer class="bg-dark text-light text-center py-3 mt-5">
        <p class="display-5 mb-2 mt-3"> Payris Fun Olympics 2024.</p>
        <p class="text-white-50">Copyright &copy; All rights reserved.</p>

    </footer>
    <!-- Footer End -->




















  
  
</body>

</html>