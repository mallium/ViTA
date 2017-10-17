<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>ViTa</title>
	<!-- favicon -->
	<link rel="shortcut icon" type="img" href="./img/favicon.png"/>

	<!-- Estilos -->
	<style type="text/css">
		
		#BodyContent, footer{
			position: absolute;
			width: 100%;
		}		

		#BodyContent{
			margin-top: 64px;
			margin-bottom: 100px;
		}

		footer{
			bottom: 0px;
		}
	</style>

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- JQuery UI -->
	<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			

	<!-- Materialize -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

	<!-- Propio -->
	<link rel="stylesheet" type="text/css" href="./css/index.css">	

	<!-- Font Awesome -->
	<script src="https://use.fontawesome.com/40ef22af4b.js"></script>

</head>
<body class="red lighten-4">
<!-- Versión de Kurt -->

	<nav class="red lighten-2" role="navigation">
		<div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><i class="medium material-icons">assistant</i>ViTA</a>
			<ul class="right hide-on-med-and-down">
				<li><a href="#"><i class="small material-icons left">highlight_off</i>Logout</a></li>
			</ul>

			<ul id="nav-mobile" class="side-nav">
				<li><a href="#"><i class="small material-icons left">highlight_off</i>Logout</a></li>
			</ul>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>
	</nav>
	<br>
	<div id="BodyContainer">
		<div class="row">
		    <div class="col s12">
		      <ul class="tabs">
		        <li class="tab col s3"><a href="#test1">Dante</a></li>
		        <li class="tab col s3"><a href="#test1">Claudio</a></li>
		        <li class="tab col s3"><a class="active" href="#test2">Lucia</a></li>
		      </ul>
		    </div>
		    <div id="test1" class="col s12">Contenido de Dante</div>
		    <div id="test1" class="col s12">Contenido de Claudio</div>
		    <div id="test2" class="col s12">Contenido de Lucia</div>
	  	</div>
	</div>
	<br>
	<footer class="page-footer red lighten-2">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Us</h5>
					<p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


				</div>
				<div class="col l3 s12">
					<h5 class="white-text">Connect</h5>
					<ul>
						<li><a class="white-text" href="#!">Facebook</a></li>
						<li><a class="white-text" href="#!">Twitter</a></li>
						<li><a class="white-text" href="#!">mail</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
			Made by <a class="red-text text-lighten-3" href="#">Kurt Poehler</a>
			</div>
		</div>
	</footer>

	<!-- JavaScript -->
	
	<!-- JQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<!-- JQuery UI -->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<!-- Materialize -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	
	<!-- D3 -->
	<script src="https://d3js.org/d3.v4.min.js"></script>

	<!-- Propio -->
	<script src="./js/index.js">
		$(document).ready(function(){
		    $('ul.tabs').tabs();
		});
	</script>
</body>
</html>