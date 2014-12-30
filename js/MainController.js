app.controller('MainController',MainController);

function MainController ($scope) {
	//Tipos de Check box existentes
	$scope.tipos = [
		{id: 1, text:"Musica"},
		{id: 2, text: "Arquivos"},
		{id: 3, text: "Videos"},
		{id: 4, text: "Imagens"},
		{id: 5, text: "Documentos"}
	];

	//Array q contem os tipos selecionados
	$scope.user = {
		roles: $scope.tipos.map(function(i) { return i; })
	};

	$scope.pressEnter = function() {
		var texto = "";
		$scope.user.roles.forEach(function(entry) {
			//Loop que pega os tipos selecionados
			texto += entry.text + ' \n';
		});

		alert('Função de Pesquisa Selecionada ,opções selecionadas ' + texto);

  	}

  	$scope.logon = function() {
  		alert('Entrar/Cadastrar');
  	}
}