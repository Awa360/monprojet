<!DOCTYPE html>
<html>
<head>
	<title>mon test</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <style type="text/css">
    body{
          background-image: url(img/mages.jpeg);
          background-image: no-repeat;
          background-size: cover;
         }

  </style>
  <style type="text/css">
    .form2{
      margin-left: 500px;
      margin-top: 70px;
    }
  </style>

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: red;">
        <a class="navbar-brand" href="#">Motivation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="vidéo.php">Vidéos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="inscription.php">Inscription</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="connexion.php">Connexion</a>
            </li
            <li class="nav-item">
              <a class="nav-link" href="recceuil.php">Recceuil</a>
            </lis
          </ul>
        </div>
</nav>
	</div>
	<?php 
	   include "connectbdd.php";
	 ?>
	<div>
		<div>
	<form class="form2" method="POST" action="vidéo.php">
		<p>Mail:</p>
		<input type="text" name="username">
		<p>Votre mot de pass:</p>
		<input type="password" name="motdepasse"> <br> <br>
		<input type="submit" name="S'inscrire">	
	</form>
</div>
</body>
</html>