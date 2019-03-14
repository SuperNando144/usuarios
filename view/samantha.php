<?php include_once("header.php");?>
<title>Gerenciador de Usuários - Samantha</title>

<section ng-controller="usuarios-controller">
	<div id="info">

		<h1>Emails da usuária de nome samantha</h1>

	</div>	
	<div class="container">
		<div class="row-fluid">
			<div class="emails-samantha">
				<h2 class="text-mobile">{{email}}</h2>
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
			$usuarios = response.data;

			for(var $usuario in $usuarios) {
				if($usuarios[$usuario].username=='Samantha'){
					$scope.email = $usuarios[$usuario].email; 
				}
			}

		}, function errorCallback(response) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	});	

	});


</script>