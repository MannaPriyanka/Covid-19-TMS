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

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/heroic-features.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/stylehome.css" rel="stylesheet">
<style>
body{
  padding: 0;
  margin: 0;
}
</style>
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

          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="dashboard.php"> Home </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="patients.php"> View Patients </a>
          </li>

        </ul>
        <ul class="nav navbar-nav navbar-right" style="color:white;">

          <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="#"> Welcome , <?php echo $_SESSION['name']; ?> !!</a>
          </li>
          <li><a href="logout.php" style="color:white;"><span class="glyphicon glyphicon-log-in" style="color:white;"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>