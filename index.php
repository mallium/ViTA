<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>ViTa</title>
	<!-- Estilos -->

	<!--Import Google Icon Font-->
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Materialize -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

		<!-- Propio -->
	<link rel="stylesheet" type="text/css" href="./css/index.css">

	<!-- JavaScript -->

</head>
<body class="red lighten-4">
<!-- Versión de Kurt -->

	<nav class="red lighten-2" role="navigation">
		<div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><i class="medium material-icons">assistant</i>ViTA</a>
			<ul class="right hide-on-med-and-down">
				<li><a href="login.php"><i class="small material-icons left">exit_to_app</i>Login</a></li>
			</ul>

			<ul id="nav-mobile" class="side-nav">
				<li><a href="#"><i class="small material-icons left">exit_to_app</i>Login</a></li>
			</ul>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>
	</nav>

	<div>
		<br><br>
		<div class="row">
			<div class="col s6 offset-s1">
				<div class="row">
					<div class="col s12">
						<div class="card red lighten-5">
							<div class="card-content">
								<span class="card-title">About ViTA</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi amet cumque sapiente dolor corporis nam earum necessitatibus voluptatem pariatur vitae voluptates tempora placeat, expedita qui ab et deleniti. ipsum dolor sit amet, consectetur adipisicing elit. Nemo et omnis, veniam dicta aliquid alias eos corrupti sunt pariatur voluptatum ab odit voluptatem accusamus distinctio voluptate ducimus, maxime corporis, ex! ipsum dolor sit o corporis esse enim ad quis illo accusamus magnam, ut natus in alias facilis. ipsum dolor sit amet, consectetur adipisicing elit. Totam nemo quod doloribus, fugit! Veritatis magni provident asperiores molestias ducimus, sequi laboriosam rerum mollitia sapiente ut animi qui beatae delectus dolorum! ipsum dolor sit amet, consectetur adipisicing elit. Eveniet molestiae nam voluptatibus cum delectus sint qui, doloremque illo saepe velit, omnis voluptatem ex laboriosam non hic dolor odio incidunt voluptates. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto sequi voluptatem magni quis eligendi quas at, odio unde facilis aliquid quisquam impedit illo! Quae, reprehenderit, praesentium qui tempora delectus itaque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et quae provident dolore, at fugit distinctio, repellendus voluptatem iure, itaque illo debitis assumenda quisquam asperiores vero ullam necessitatibus a nihil aperiam!</p>
							</div> 
						</div>
					</div>
				</div>
			</div>
			<div class="col s4 offset-s1">
				<div class="row">
					<div class="col s12">
						<div class="card red lighten-5">
							<div class="card-content">
								<span class="card-title center-align red-text text-lighten-3"><br><i class="large material-icons">account_circle</i></span>
								<div class="row">
									<form class="col s12">
										<div class="row">
											<div class="input-field col s6">
												<input id="first_name" type="text" class="validate">
												<label for="first_name">First Name</label>
											</div>
											<div class="input-field col s6">
												<input id="last_name" type="text" class="validate">
												<label for="last_name">Last Name</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col s12">
												<input id="password" type="password" class="validate">
												<label for="password">Password</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col s12">
												<input id="email" type="email" class="validate">
												<label for="email">Email</label>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="card-action">
							  <a href="#">Register</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br><br>
	</div>

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
	
	<!-- JQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<!-- Materialize -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	
	<!-- Propio -->
	<script src="./js/index.js"></script>
</body>
</html>