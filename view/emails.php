<?php include_once("header.php");?>
<title>Gerenciador de Usuários - Emails</title>

<section ng-controller="usuarios-controller">
	<div id="info">

		<h1>Emails de todos os usuários</h1>

	</div>	
	<div class="container">
		<div class="row-fluid">
			<div class="emails" ng-repeat="usuario in usuarios">
				<h2 class="text-mobile">{{usuario.email}}</h2>
			</div>
		</div>
	</div>

</div>
</section>

<?php include_once("footer.php");?>

<script>
	angular.module("usuarios", []).controller("usuarios-controller", function($scope, $http){
		$scope.usuarios = [];	

		$http({
			method: 'GET',
			url: 'https://jsonplaceholder.typicode.com/users'
		}).then(function successCallback(response) {
			$scope.usuarios = response.data;

		}, function errorCallback(response) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	});	
		
	});


</script>