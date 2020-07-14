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
          <a class="nav-link" href="../site/Street-Rua-SITE.php">Home <span class="sr-only">(current)</span></a>
        </li>
		<li class="nav-item dropdown">
		  <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Towncity</a>
		  <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="../site/Towncity-História.php">História</a>
            <a class="dropdown-item" href="../site/Towncity-Personagens.php">Personagens</a>
            <a class="dropdown-item" href="../site/Towncity-Futuro.php">Futuro</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="formulario-street-rua.php" >Beta</a>
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
  <br/>
  <div class="container marketing">

    <div class="row featurette">
      <div class="col-md-7">
	  	<?php 
		echo session_id();
	?>
        <h2 class="featurette-heading">Marvin <span class="text-muted" >- O Pastor</span></h2>
        <p class="lead">Cresceu em família conservadora e extremamente religiosa e desde sempre sonhou em ser pastor. Acha que as mudanças climáticas são castigos de Deus devido às ações da humanidade e seu descaso com o meio ambiente, construindo cada vez mais fábricas que poluem os ares, esgotos que poluem os rios e mares e o crescimento desenfreado, fazendo com que seja preciso diminuir o número de florestas para comportar o número de pessoas na Terra. Acha que os culpados são aqueles que não seguem sua doutrina e quer purificá-los! </p>
      </div>
      <div class="col-md-5">
        <img src="../imagens/Pmetralhadora.gif" class="img-fluid" width="500" height="500">
		</div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Paulão <span class="text-muted">- O Bombado</span></h2>
        <p class="lead">Paulão curte halterofilismo desde criança. Órfão de pai, conciliava a academia com trabalho e estudos. Após as mudanças, Paulão criou um comportamento agressivo. Acha que a culpa disso é dos “frangos” que não vão a academia. </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="../imagens/Bombado_fedorento.gif" class="img-fluid" width="500" height="500">
		</div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Safira <span class="text-muted">- A Travesti</span></h2>
        <p class="lead">Vive em um bairro classe média, sua vida é buscar a fama e poder. Atualmente trabalha em uma boate onde se apresenta como cantora, é muito conhecida nas noites por onde passa. Tem tentando buscar destaque para ganhar mais espaço e fama pelo mundo. Tentou ser modelo e atriz mas foi rejeitada em alguns testes, o que a frustrou muito e a fez mudar para uma personalidade mais forte e difícil. </p>
      </div>
      <div class="col-md-5">
        <img src="../imagens/No-picture.png" class="img-fluid" width="500" height="500">
		</div>
    </div>
	
	<hr class="featurette-divider">
	
	<div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Cleitinho do Grau <span class="text-muted">- O Motoboy</span></h2>
        <p class="lead">Nascido na periferia da cidade, a conhece como a palma da mão devido a sua profissão de motoboy. Acredita que a mudança climática é culpa do excesso de carros nas ruas. Já perdeu a conta de quantas vezes se acidentou com sua moto, mas jura que nunca teve culpa em nenhuma. </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="../imagens/No-picture.png" class="img-fluid" width="500" height="500">
		</div>
    </div>
	
	<hr class="featurette-divider">
	
	<div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Dr. Travis <span class="text-muted">- O Diretor</span></h2>
        <p class="lead">Nascido em família rica, aprendeu desde cedo a importância do dinheiro. Está ciente dos danos causados pela fábrica ao meio ambiente, mas acredita que as consequências de a fecharem serão piores, causando desemprego e levando milhares de pessoas à fome. Diretor da fábrica, é mentor da facção que a defende, possui uma equipe responsável em treiná-la. </p>
		</div>
      <div class="col-md-5">
        <img src="../imagens/No-picture.png" class="img-fluid" width="500" height="500">
		</div>
    </div>
	
	<hr class="featurette-divider">
	
	<div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Seu Jairo <span class="text-muted">- O Sindicalista</span></h2>
        <p class="lead">Vindo de família humilde e do campo, sempre soube o valor da natureza e a respeitá-la. Devido a infância pobre, está acostumado a economizar recursos e a tirar vantagem das dificuldades. Acredita que a fábrica é a principal causadora do caos que se encontra a cidade, e ao fechá-la promete reflorestar o lugar em que ela foi construída. É líder da equipe contra a fábrica, passa seus conhecimentos de sobrevivência aos seus seguidores. </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="../imagens/No-picture.png" class="img-fluid" width="500" height="500">
		</div>
    </div>
	
	<hr class="featurette-divider">
  </div>


  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-lg-4 dev-item">
        <h2>História</h2>
        <p>Conheça a história de Towncity! </p>
        <p><a class="btn btn-secondary" href="Towncity-História.php" role="button">Conheça mais &raquo;</a></p>
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
