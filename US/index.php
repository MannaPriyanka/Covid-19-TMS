<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">  
<link rel="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">


  <title>Covid-19 Testing Management System</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

<!-- Custom styles for this template -->
  <link href="css/stylehome.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Covid19-TMS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About Coronavirus </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Covid-19 Symptoms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Prevention</a>
          </li>
  <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="new-user-testing.php">Testing</a>
          </li>
           <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="live-test-updates.php">Live Updates</a>
          </li>

			
 <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="StateCases.php">State Cases</a>
          </li>
			
			
           <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="login.php">Admin</a>
          </li>
		  
		  <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="loginuser.php">User</a>
          </li>


        </ul>
      </div>
    </div>
  </nav>

  <header  style="background-color: #FCE4EC;"class="bg-primary text-white" >
    <div class="container text-center">
      <h1>COVID19-TMS</h1>
      <p class="lead">COVID19 - Testing Management System</p>
    </div>
  </header>
  <nav class="navbar navbar-light bg-head mb-3" style="background-color: #FCE4EC;">
    <div class="navbar-brand">
        <p class="mb-0"><a href="/">CORONA सहाय</a></p>
        <small class="float-left">Made by RAVINA ☕️ &amp; ❤️ PRIYANKA in Ahmedabad</small>
    </div>
    <div>
        <a class="btn btn-light ca-btn float-right text-pink" target="_blank" href="add-resource.php"><i class="fas fa-plus"></i></a>
        <a class="btn btn-light ca-btn-sm float-right text-pink mr-2" target="_blank" href="terms-and-conditions.php"><i class="fas fa-asterisk"></i></a>
        <a class="btn btn-light ca-btn-sm float-right text-pink mr-2" target="_blank" href="team.php"><i class="fas fa-users"></i></a>
    </div>
</nav>
  <section>
	<div class="container" id="dash">
            <div class="">
                <div class="alert alert-info text-center">
                    <p>Take a deep breath!</p>
                    <h3>23720919</h3>
                    <p>People have recovered from COVID-19 in India.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-3 mb-3">
                    <div class="card" id="card1">
                        <div class="card-body">
                            <a href="resources.php?id=1&amp;type=OXYGEN&amp;state=Gujarat&amp;city=">
                                <div class="icon">
                                    <img style="max-height: 100%;
    max-width: 100%;vertical-align: middle;
    border-style: none;" src="icons/oxygen.png" alt="id=1&amp;">
                                </div>
                                <p class="text-center">OXYGEN</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="card" id="card2">
                        <div class="card-body">
                            <a href="resources.php?id=2&amp;type=MEDICINES&amp;state=Gujarat&amp;city=">
                                <div class="icon">
                                    <img style="max-height: 100%;
    max-width: 100%;vertical-align: middle;
    border-style: none;" src="icons/remdesivir.png" alt="REMDESIVIR">
                                </div>
                                <p class="text-center">MEDICINES</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="card" id="card3">
                        <div class="card-body">
                            <a href="resources.php?id=3&amp;type=HOSPITAL / AMBULANCE&amp;state=Gujarat&amp;city=">
                                <div class="icon">
                                    <img style="max-height: 100%;
    max-width: 100%;vertical-align: middle;
    border-style: none;" src="icons/ambulance.png" alt="AMBULANCE">
                                </div>
                                <p class="text-center">HOSPITAL / AMBULANCE</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="card" id="card4">
                        <div class="card-body">
                            <a href="resources.php?id=4&amp;type=PLASMA&amp;state=Gujarat&amp;city=">
                                <div class="icon">
                                    <img style="max-height: 100%;
    max-width: 100%;vertical-align: middle;
    border-style: none;" src="icons/plasma.png" alt="PLASMA">
                                </div>
                                <p class="text-center">PLASMA</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="card" id="card5">
                        <div class="card-body">
                            <a href="resources.php?id=5&amp;type=BLOOD DONERS&amp;state=Gujarat&amp;city=">
                                <div class="icon">
                                    <img style="max-height: 100%;
    max-width: 100%;vertical-align: middle;
    border-style: none;" src="icons/blood-doners.png" alt="BLOOD DONERS">
                                </div>
                                <p class="text-center">BLOOD DONERS</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="card" id="card6">
                        <div class="card-body">
                            <a href="resources.php?id=6&amp;type=FOOD SERVICES&amp;state=Gujarat&amp;city=">
                                <div class="icon">
                                    <img style="max-height: 100%;
    max-width: 100%;vertical-align: middle;
    border-style: none;" src="icons/food.png" alt="FOOD SERVICES">
                                </div>
                                <p class="text-center">FOOD SERVICES</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="card" id="card7">
                        <div class="card-body">
                            <a href="resources.php?id=7&amp;type=QUARANTINE PLACES&amp;state=Gujarat&amp;city=">
                                <div class="icon">
                                    <img style="max-height: 100%;
    max-width: 100%;vertical-align: middle;
    border-style: none;"src="icons/quarantine-hospital.png" alt="QUARANTINE PLACES">
                                </div>
                                <p class="text-center">QUARANTINE PLACES</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="card" id="card8">
                        <div class="card-body">
                            <a href="resources.php?id=8&amp;type=AFTER-DEATH SERVICES&amp;state=Gujarat&amp;city=">
                                <div class="icon">
                                    <img  style="max-height: 100%;
    max-width: 100%;vertical-align: middle;
    border-style: none;"src="icons/tombstone.png" alt="AFTER-DEATH SERVICES">
                                </div>
                                <p class="text-center">AFTER-DEATH SERVICES</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="card" id="card9">
                        <div class="card-body">
                            <a href="resources.php?id=9&amp;type=OTHER SERVICES&amp;state=Gujarat&amp;city=">
                                <div class="icon">
                                    <img style="max-height: 100%;
    max-width: 100%;vertical-align: middle;
    border-style: none;" src="icons/charity.png" alt="OTHER SERVICES">
                                </div>
                                <p class="text-center">OTHER SERVICES</p>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
  
  
  
  </section>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>About this page</h2>
          <p class="lead">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. Most people infected with the COVID-19, virus will experience mild to moderate, respiratory illness & recover without requiring special treatment. Older people and those with underlying medical problem like cardiovascular disease.</p>
          <p class="lead">The COVID-19 virus spread primarily through droplet of saliva or discharge from the nose when an infected person coughs or sneezes so it’s important that you also practice respiratory etiquette.</p>
         
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Covid-19 Symptoms</h2>
          <hr />
<p><strong>Hight Fever 2-14 days!</strong><br />
Reported illnesses have ranged from mild symptoms to severe illness and death</p>
             <hr />
<p><strong>Dry Cough 2-14 days!</strong><br />
Reported illnesses have ranged from mild symptoms to severe illness and death</p>
          <hr />
<p><strong>Shortness of breath!</strong><br />
Reported illnesses have ranged from mild symptoms to severe illness and death</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Prevention</h2>
  <ul>
            <li>Wash your Hands often</li>
            <li>Wear A Face mask</li>
            <li>Avoid contact with sick people</li>
            <li>Always cover your cough or sneeze</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
