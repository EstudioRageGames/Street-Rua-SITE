<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="autor" content="Estudio Rage Games">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Street Rua</title>

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
  <body>
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
        </li><li class="nav-item">
		<?php
			if(isset($_SESSION["codigo"])== true){
				echo "<a class='nav-link' href='Logon.php' >Logon</a>";
			} else {
				echo "<a class='nav-link' href='Login.php' >Login</a>";
			}
		?></li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
  </nav>
</header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../imagens/rage_games_carrosel.png" class="img-fluid" width="1000" height="2000">
		<div class="container">
          <div class="carousel-caption text-left">
            <h1>Estudio Rage Games</h1>
            <p>Estudio Rage Games lança seu primeiro jogo, Street Rua</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
                <img src="../imagens/cena_de_luta_carrosel.png" class="img-fluid" width="500" height="500">
        <div class="container">
          <div class="carousel-caption">
            <h1>Street Rua</h1>
            <p>Street Rua é um jogo de luta.....</p>
            <p><a class="btn btn-lg btn-primary" href="Towncity.php" role="button">Towncity</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../imagens/Streetrua.jpg" class="img-fluid" width="500" height="500">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Beta Fechado!</h1>
            <p>Inscreva-se no formulário para concorrer a uma chave de acesso para o Beta Fechado de Street Rua</p>
            <p><a class="btn btn-lg btn-primary" href="formulario-street-rua.php" role="button">Formulário</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container marketing">

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">JOGUE STREET RUA <span class="text-muted" ><a href="formulario-street-rua.php" class="text-muted">Cadastre-se para o BETA </a> Disponivel para PC</span></h2>
        <p class="lead">Jogo de Luta Multiplayer com mecânicas divertidas e muitos personagens divertidos. Street RUA é um jogo com gráficos 2d e gameplay clássica <i>Beat 'em up</i>, com batalhas emocionantes, traga seus amigos e prove quem é o Melhor!</p>
      </div>
      <div class="col-md-5">
        <img src="../imagens/cena_de_luta.png" class="img-fluid" width="500" height="500">
		</div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Towncity <span class="text-muted"></h2>
        <p class="lead">Na cidade de Towncity uma fábrica é responsável pela poluição desenfreada que está causando mudanças climáticas irreversíveis. Devido a estas mudanças, a população começou a criar comportamentos agressivos que dividiu a cidade em dois grupos: Os que defendem a fábrica e os que são contra ela. A cidade está sitiada e brigas ocorrem por toda área, venha defender o lado que acredite ser o melhor!</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="../imagens/town.jpg" class="img-fluid" width="500" height="500">
		</div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Mecânicas e Gameplay <span class="text-muted">Divertidas.</span></h2>
        <p class="lead">Ao combinar estilos de jogos chegamos a uma gameplay totalmente divertida, com mecânicas dinâmicas e um alto potêncial de diversão e competição entre você e seus amigos.</p>
      </div>
      <div class="col-md-5">
        <img src="../imagens/scene.jpg" class="img-fluid" width="500" height="500">
		</div>
    </div>
	   <hr class="featurette-divider">
	<main role="main" class="container">
		<div class="jumbotron">
			<h1><center>Teste de Gameplay</center></h1>
		</div>
	</main><br/>
<div class="embed-responsive embed-responsive-16by9" >
  <iframe class="embed-responsive-item" src="..\imagens\streetrua_dev1.mp4"></iframe>
</div>
	
    <hr class="featurette-divider">
	<main role="main" class="container">
		<div class="jumbotron">
			<h1><center>Quem somos?</center></h1>
		</div>
	</main><br/>

    <div class="row">

      <div class="col-lg-4">
        <img src="../imagens/nildo.png" class="img-fluid rounded-circle" width="200" height="200">
		<h2>Antonio Nildo</h2>
        <p>Do time de Arte e web, fez parte do desenvolvimento do site, das artes e do design do jogos Dogmalia e Street RUA. Fã de league of legends, Mobile legends, RPGs e basquete.</p>
		<a href="https://www.linkedin.com/in/nildotoni/"style="margin-right:15px"><img src="../imagens/png-transparent-logo-linkedin.png" class="img-fluid rounded-circle" width="30" height="30"></a>
		<a href="https://github.com/nildotoni"style="margin-right:15px"><img src="../imagens/png-transparent-logo-github.png" class="img-fluid rounded-circle" width="30" height="30"></a>
		<a href="https://www.instagram.com/nilderas/" style="margin-right:15px"><img src="../imagens/png-transparent-logo-instagram.png" class="img-fluid rounded-circle" width="30" height="30"></a>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="../imagens/bruno.png" class="img-fluid rounded-circle" width="200" height="200">
		<h2>Bruno Lucino</h2>
        <p>Do time de Dev do Estudio, trabalhou para realizar a implementação do site, entre outras coisas.</p>
        <a href="https://www.linkedin.com/in/bruno-lucino-19a16614a/"style="margin-right:15px"><img src="../imagens/png-transparent-logo-linkedin.png" class="img-fluid rounded-circle" width="30" height="30"></a>
		<a href="https://github.com/TrolandoOficial"style="margin-right:15px"><img src="../imagens/png-transparent-logo-github.png" class="img-fluid rounded-circle" width="30" height="30"></a>
		<a href="https://www.instagram.com/brunolucino/" style="margin-right:15px"><img src="../imagens/png-transparent-logo-instagram.png" class="img-fluid rounded-circle" width="30" height="30"></a>
	  </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="../imagens/leandro.png" class="img-fluid rounded-circle" width="200" height="200">
		<h2>Leandro Rodrigues</h2>
        <p>Generalista e Grande apreciador de piadas ruins e amante de JRPG</p>
		<a href="https://www.linkedin.com/in/leandro-dos-santos-rodrigues-69146232/"style="margin-right:15px"><img src="../imagens/png-transparent-logo-linkedin.png" class="img-fluid rounded-circle" width="30" height="30"></a>
		<a href="https://github.com/Lrds91"style="margin-right:15px"><img src="../imagens/png-transparent-logo-github.png" class="img-fluid rounded-circle" width="30" height="30"></a>
		<a href="https://www.instagram.com/lrds_/" style="margin-right:15px"><img src="../imagens/png-transparent-logo-instagram.png" class="img-fluid rounded-circle" width="30" height="30"></a>
      </div><!-- /.col-lg-4 -->
	  <div class="col-lg-4 dev-item">
        <img src="../imagens/maycon.png" class="img-fluid rounded-circle" width="200" height="200">
		<h2>Maycon Almeida</h2>
        <p>Programador/Game Designer e Fã de jogos de luta e Ação.</p>
		<a href="https://www.linkedin.com/in/maycon-alves-de-almeida-9a089b161"style="margin-right:15px"><img src="../imagens/png-transparent-logo-linkedin.png" class="img-fluid rounded-circle" width="30" height="30"></a>
		<a href="https://github.com/MayconAlvesdeAlmeida"style="margin-right:15px"><img src="../imagens/png-transparent-logo-github.png" class="img-fluid rounded-circle" width="30" height="30"></a>
		<a href="https://www.youtube.com/channel/UCE27YuhnS8mfguvX1mr8Ksw" style="margin-right:15px"><img src="../imagens/png-transparent-logo-instagram.png" class="img-fluid rounded-circle" width="30" height="30"></a>
      </div><!-- /.col-lg-4 -->
	  <div class="col-lg-4 dev-item">
        <img src="../imagens/pedro.png" class="img-fluid rounded-circle" width="200" height="200">
		<h2>Pedro Cazzarotti</h2>
        <p>Aspirante a programador e game design e Fã de tudo que é retrô</p>
		<a href="https://www.linkedin.com/mwlite/in/pedro-henrique-cazzarotti-151988171"style="margin-right:15px"><img src="../imagens/png-transparent-logo-linkedin.png" class="img-fluid rounded-circle" width="30" height="30"></a>
		<a href="https://github.com/PedroCazzarotti"style="margin-right:15px"><img src="../imagens/png-transparent-logo-github.png" class="img-fluid rounded-circle" width="30" height="30"></a>
		<a href="https://www.instagram.com/pedrocazzarotti/" style="margin-right:15px"><img src="../imagens/png-transparent-logo-instagram.png" class="img-fluid rounded-circle" width="30" height="30"></a>
		</div><!-- /.col-lg-4 -->
	<main role="main" class="container">
		<div class="jumbotron">
			<h1><center>Nossos Jogos</center></h1>
		</div>
	</main><br/>
	
	  <div class="col-lg-4 game-item">
		<img src="../imagens/Dogmalia.png" class="img-fluid rounded-circle" width="200" height="200"> 
        <h2>Dogmalia</h2>
        <p>O primeiro projeto do Estudio está disponível para download no itch.io, clique no botão abaixo para acessa-lo.</p>
        <p><a class="btn btn-secondary" href="https://pedrocazzarotti.itch.io/dogmalia" role="button">Acessar &raquo;</a></p>
      </div><!-- /.col-lg-4 -->

	  <div class="col-lg-4 game-item">
        <img src="../imagens/Zombie-Hunter.png" class="img-fluid rounded-circle" width="200" height="200">
		<h2>Zombie Hunter</h2>
        <p>Também pode jogar esse incrível jogo de zumbi, projetado pelo nosso Dev Maycon Almeida.</p>
        <p><a class="btn btn-secondary" href="https://mayconalmeida.itch.io/zombie-hunter-until-the-last-soul" role="button">Acessar &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

  </div><!-- /.container -->


  <!-- FOOTER -->
    <footer class="container">
	<p class="float-right"><a href="#">Topo</a></p>
    <p class="mb-1">&copy; 2019-2020 Estudio Rage Games</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidade</a></li>
      <li class="list-inline-item"><a href="#">Termos</a></li>
      <li class="list-inline-item"><a href="#">Suporte</a></li>
    </ul>
  </footer>
</div>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script></body>
</html>
