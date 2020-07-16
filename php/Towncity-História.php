<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="autor" content="Estudio Rage Games">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Futuro</title>
	
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
          <a class="nav-link" href="../php/formulario-street-rua.php" >Beta</a>
        </li>
		<li class="nav-item">
		<?php
			session_start();
			if(isset($_SESSION["codigo"])== true){
				echo "<a class='nav-link' href='Logon.php'> Logon </a>";
			} else {
				echo "<a class='nav-link' href='Login.php'> Login </a>";
			}
		?>
		</li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
  </nav>
</header>

<main role="main">

  <div class="container">
    <img src="../imagens/Streetrua.jpg" class="img-fluid" width="100%" height="100%"><br/>
    </br><p class="lead">No ano 2020, a humanidade se prepara para entrar na era da inteligência artificial, os avanços da tecnologia foram gigantescos. Contudo, o uso fora de controle de combustíveis fósseis e a poluição gerada por uma população de bilhões de pessoas tem seu preço.</p>

	<p class="lead">A cidade de Towncity sofre com essa poluição. Constantemente sobrecarregada pelo despejo da sua principal fábrica, o clima da cidade entrou em colapso. </p>

	<p class="lead">A população e os animais vêm tendo problemas com diversos desastres naturais, muitas vezes os fazendo brigar por território ou até mesmo pelo stress causado pelas mudanças de temperaturas. De dia, costuma-se fazer 40°C, enquanto á noite, a temperatura pode chegar a 0°C facilmente. Boa parte enlouqueceu, e passou a ter comportamentos agressivos.</p>

	<p class="lead">Parte da cidade é contra essa fábrica. Buscando resgatar a natureza e voltar às vidas que tinham antes da construção dela, irão até o fim em busca de seus ideais.</p>

	<p class="lead">Já outra parte é a favor desta fábrica, com o argumento de que a mudança que ela trouxe faz parte da evolução da cidade, que o retorno financeiro faz jus aos danos contra a natureza e que a mudança climática é natural no planeta e vem acontecendo desde sempre. </p>
  </div><br/>


  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-lg-4 dev-item">
        <h2>Personagens</h2>
        <p>Nessa cidade todos brigam, escolha o que mais gosta e lute pelo que acredita! </p>
        <p><a class="btn btn-secondary" href="Towncity-Personagens.php" role="button">Conheça mais &raquo;</a></p>
      </div>
      <div class="col-lg-4 dev-item">
        <h2>Futuro</h2>
        <p>Travis ou Jairo, quem defenderá? </p>
        <p><a class="btn btn-secondary" href="Towncity-Futuro.php" role="button">Escolha &raquo;</a></p>
      </div>
    <hr>
  </div> <!-- /container -->
  <br/>
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
