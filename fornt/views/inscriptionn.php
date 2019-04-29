<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Anti-Gaspinisie</title>
  

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="css/form.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">
  <script>
    function mesure()
    {
      if(number.lenght>8)
        alert("le numero telephone ne doit pas depasser 8 chiffres");
    }
  
<script src="jss.js"> </script>
</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Inscription</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">à propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Partenaires</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Inscription</h2>
          <hr class="divider light my-4">
		<div>
		 <form method="post" action="inscription.php"> <center>
		  <input type="text" name="prenom" placeholder="Prénom"><br>
		  <input type="text" name="nom" placeholder="Nom"><br>
		  <input type="text" name="login" placeholder="Pseudo"><br>
		  <input type="password" name="motdepasse" placeholder="Mot De Passe"><br>
		  <input type="number" name="age" placeholder="age"><br>
		  <input type="tel" name="numtel" placeholder="+216........">
		  </center>
		  <P>Choisissez votre sexe : <SELECT name="sexe">
    <OPTION value='h' >Homme
    <OPTION value='f'>Femme
  
</SELECT><br>
      <center><input type="submit" name="submit" id="submit"></center>
		   
		 </form>

        </div>
		

              </center></div>
      </div>
    </div>
        </div>
  </section>

 </body>
 </html>
