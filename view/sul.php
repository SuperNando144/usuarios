<?php include_once("header.php");?>
<title>Gerenciador de Usuários - Hemisfério Sul</title>

<section ng-controller="usuarios-controller">
	<div id="info">

		<h1>Total de Usuários no Hemisfério Sul</h1>

	</div>	
	<div class="container">
		<div class="row-fluid">
			<div class="emails-samantha">
				<h2 class="text-mobile-sul">Existe um total de {{total}} no hemisfério sul.</h2>
			</div>
		</div>
	</div>

</div>
</section>

<?php include_once("footer.php");?>

<script>
	angular.module("usuarios", []).controller("usuarios-controller", function($scope, $http){
		$scope.usuarios = [];	
		var total=0;

		$http({
			method: 'GET',
			url: 'https://jsonplaceholder.typicode.com/users'
		}).then(function successCallback(response) {
			$usuarios = response.data;

			for(var $usuario in $usuarios) {
				if($usuarios[$usuario].address.geo.lat<0){
					total=total+1;
				}
			}
			$scope.total = total; 
		}, function errorCallback(response) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	});	

	});


</script>