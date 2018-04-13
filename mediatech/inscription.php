
<!DOCTYPE html>
<html>
<head>
	<title>mon test</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <style type="text/css">
    body{
          background-image: url(img/61.jpg);
          background-repeat: no-repeat;
          background-size: cover;
         }
  </style>
  <style type="text/css">
    .form{
      margin-left: 550px;
      margin-top: 40px;
      line-height: 25px;
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
        <a class="nav-link" href="index.php">Connexion</a>
      </li
      <li class="nav-item">
        <a class="nav-link" href="recceuil.php">Recceuil</a>
      </lis
    </ul>
  </div>
</nav>
<?php 
if (isset($_POST['Sinscrire'])) {

 $username= ($_POST['username']);
  $motdepasse= ($_POST['motdepasse']);
  $confirmermotdepasse= ($_POST['confirmermotdepasse']);
  if ($username&&$motdepasse&&$confirmermotdepasse) 
  {
    echo "string";
  }else echo "Veuillez saisir tous les champs";

}
 ?>
		<form class="form" method="POST" action="connexion.php">
		<p>Mail:</p>
		<input class="embed-ajusted embed-responsive-2b8" type="text" name="username">
		<p>Votre mot de passe:</p>
		<input class="embed-ajusted embed-responsive-2b8" type="password" name="motdepasse">
		<p>Confirmer mot de passe:</p>
		<input class="embed-ajusted embed-responsive-2b8" type="password" name="confirmermotdepasse"> <br> <br>
		<input class="embed-ajusted embed-responsive-2b8" type="submit" name="Sinscrire" >	
	</form>
	</div> 
</body>
</html>y