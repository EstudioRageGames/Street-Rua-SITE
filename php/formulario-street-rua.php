<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="autor" content="Estudio Rage Games">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Formulário Beta</title>
	
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
  <body class="bg-light">
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="Street-Rua-SITE.html">Street Rua</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../site/Street-Rua-SITE.html">Home <span class="sr-only">(current)</span></a>
        </li>
		<li class="nav-item dropdown">
		  <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Towncity</a>
		  <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="../site/Towncity-História.html">História</a>
            <a class="dropdown-item" href="../site/Towncity-Personagens.html">Personagens</a>
            <a class="dropdown-item" href="../site/Towncity-Futuro.html">Futuro</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="formulario-street-rua.php" >Beta</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="Login.php" >Login</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
  </nav>
</header><br/>
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" href="../site/Street-Rua-SITE.html" src="../imagens/logo streetrua.png" alt="" height="200px">
    <h2>BETA Fechado</h2>
    <p class="lead">Preencha o Formulário abaixo para se inscrever no nosso BETA Fechado, entraremos em contato por e-mail com as informações para adquirir o jogo caso tenha saido selecionado!</p>
  </div>

  <div class="row">
    <div class="col-md-12 order-md-3">
      <h4 class="mb-3">Formulário de Cadastro</h4>
      <form class="needs-validation" novalidate action="formulario-street-rua.php" method="post">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="" value="" required>
            <div class="invalid-feedback">
              Seu nome é necessário.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Sobrenome</label>
            <input type="text" class="form-control" name="sobrenome"id="sobrenome" placeholder="" value="" required>
            <div class="invalid-feedback">
              Seu sobrenome é necessário.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Usuário</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuário" required>
            <div class="invalid-feedback" style="width: 100%;">
              Seu nome de usuário é necessário.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">E-mail</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="vc@exemplo.com">
          <div class="invalid-feedback">
            Por favor, insira um e-mail valido.
          </div>
        </div>
		<div class="mb-3">
          <label for="password">Senha</label>
          <input type="password" class="form-control" name="senha"	id="senha">
          <div class="invalid-feedback">
            Por favor, insira uma senha válida!
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">País</label>
            <select class="custom-select d-block w-100" name="pais" id="pais" required>
              <option value="">País...</option>
              <option>Brasil</option>
            </select>
            <div class="invalid-feedback">
              Por favor, selecione um país valido.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Estado</label>
            <select class="custom-select d-block w-100" name="estado" id="estado" required>
              <option value="">Estado...</option>
              <option>AC</option>
			  <option>AL</option>
			  <option>AP</option>
			  <option>AM</option>
			  <option>BA</option>
			  <option>CE</option>
			  <option>DF</option>
			  <option>ES</option>
			  <option>GO</option>
			  <option>MA</option>
			  <option>MT</option>
			  <option>MS</option>
			  <option>MG</option>
			  <option>PA</option>
			  <option>PB</option>
			  <option>PR</option>
			  <option>PE</option>
			  <option>PI</option>
			  <option>RJ</option>
			  <option>RN</option>
			  <option>RS</option>
			  <option>RO</option>
			  <option>RR</option>
			  <option>SC</option>
			  <option>SP</option>
			  <option>SE</option>
			  <option>TO</option>
            </select>
            <div class="invalid-feedback">
              Por favor, selecione um estado válido.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" name="promoinfo" id="promoinfo">
          <label class="custom-control-label" for="promoinfo">Aceito receber informações e promoções relacionadas ao jogo Street Rua</label>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" name="b1" type="submit">Se inscrever no BETA Fechado</button>
      </form>
	  	<?php
		$con = new mysqli("localhost","root","", "street_rua");
		if(isset($_POST["b1"])){
			$usuario = $_POST["usuario"];
			$nome	= $_POST["nome"];
			$sobrenome = $_POST["sobrenome"];
			$email	= $_POST["email"];
			$senha	= $_POST["senha"];	
			$sql = "insert into usuario(usuario, nome, sobrenome, email,senha) values('$usuario', '$nome', '$sobrenome', '$email', md5('$senha'))";
			mysqli_query($con,$sql);
			echo "<div class='alert alert-success' role='alert'>
					Obrigado por se inscrever!!!
					</div>";
		}
		//TODO Alerta para falha caso usuario já exista no BD
		/*
		USUARIO JA CADASTRADO
		<div class="alert alert-danger" role="alert">
		Um simples alerta danger. Olha só!
		</div>
		
		EMAIL JA CADASTRADO
		<div class="alert alert-warning" role="alert">
		Um simples alerta warning. Olha só!
		</div>
		*/
		$con->close();
		?>
    </div>
  </div>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2019-2020 Estudio Rage Games</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidade</a></li>
      <li class="list-inline-item"><a href="#">Termos</a></li>
      <li class="list-inline-item"><a href="#">Suporte</a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
        <script src="form-validation.js"></script></body>
</html>