app.controller('MainController',MainController);

function MainController ($scope) {
	$scope.pressEnter = function() {
		alert('Função de pesquisa');
  	}

  	$scope.logon = function() {
  		alert('Entrar/Cadastrar');
  	}
}