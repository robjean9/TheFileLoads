<!DOCTYPE HTML>
<html ng-app='fileloads'>
	<head>
		<title>The File Loads</title>
		<meta charset='utf-8'/>
		<link type='text/css' rel='stylesheet' href='css/reset.css' />
		<link type='text/css' rel='stylesheet' href='css/bootstrap.css' />
		<link type='text/css' rel='stylesheet' href='css/estilo.css' />
		<script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/angularjs/1.3.1/angular.js'></script>
		<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.8/angular-resource.js'></script>
		<script type="text/javascript" src='js/app.js'></script>
		<script type="text/javascript" src='js/MainController.js'></script>

	</head>
	<body ng-controller='MainController' >
		<!-- Container Centralizado -->
		<div class='container'>
			<!-- Menu Top -->
			<nav class='menu-bar row'>
				<div class="col-xs-12 col-md-8">
			 		<h1>TheFileLoads</h1>
			 	</div>

			 	<div class="col-xs-6 col-md-4">
			 		<a href='#'> Entrar/Cadastrar </a>
			 	</div>
			</nav>

			<section class='conteudo'>
				<form ng-submit='pressEnter()'>
					<label> The File Loads </label>
  					<input type="text" class="form-control" aria-describedby="basic-addon1" on>
  				</form>
				
			</section>

			<div class='rodape'>
				<h2>@CopyRight<h2>
			</div>
		</div>
	</body>
	
	
	
</html>