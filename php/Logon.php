<?php
	session_start();
	if(isset($_SESSION["codigo"])==false){
		header("location: login.php");
	}
?>

<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="autor" content="Estudio Rage Games">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Logon</title>
	
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="RageGames.css" rel="stylesheet">
  </head>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="Street-Rua-SITE.php">Street Rua</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="Street-Rua-SITE.php">Home <span class="sr-only">(current)</span></a>
        </li>
		<li class="nav-item dropdown">
		  <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Towncity</a>
		  <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="Towncity-História.php">História</a>
            <a class="dropdown-item" href="Towncity-Personagens.php">Personagens</a>
            <a class="dropdown-item" href="Towncity-Futuro.php">Futuro</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="formulario-street-rua.php" >Beta</a>
        </li><li class="nav-item">
		<?php
			if(isset($_SESSION["codigo"])== true){
				echo "<a class='nav-link' href='Logon.php' >Logon</a>	";
			} else {
				echo "<a class='nav-link' href='Login.php' >Login</a>";
			}
		?> </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
  </nav>
</header>

<main role="main">
	<br/><div class='col-md-12 order-md-3'><div class='alert alert-success' role='alert'>Login efetuado com sucesso</div><br/>
	<a href="../game/Street-Rua-1.0.0.rar" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Download</a>
	<a href="Logoff.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Logoff</a>

	<br/><br/><br/>

</main>

    <footer class="container">
	<p class="float-right"><a href="#">Topo</a></p>
    <p class="mb-1">&copy; 2019-2020 Estudio Rage Games</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidade</a></li>
      <li class="list-inline-item"><a href="#">Termos</a></li>
      <li class="list-inline-item"><a href="#">Suporte</a></li>
    </ul>
  </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script></body>
</html>