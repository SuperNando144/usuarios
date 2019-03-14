$(document).ready(function(){

	$("#btn-bars").on("click", function(){

		$("header").toggleClass("open-menu");

	});

	$("#menu-mobile-mask, .btn-close").on("click", function(){

		$("header").removeClass("open-menu");


	});

	$("#btn-search").on("click", function(){

		$("header").toggleClass("open-search");
		$("#input-search-mobile").focus();

	});


});