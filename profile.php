<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>ViTa</title>
	<!-- favicon -->
	<link rel="shortcut icon" type="img" href="./img/favicon.png"/>

	<!-- Estilos -->

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

	<div class="row">
		<div class="col s4">
			<div id="profile-info" class="card ">
				<div class="card-image">
					<img src="./img/user-picture.jpeg" alt="Annette J. Barrett">
					<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">toys</i></a>
					<!-- <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">local_cafe</i></a> -->
				</div>
				<div class="card-content">
					<!-- <span class="card-title center-align red-text text-lighten-3"><br><i class="large material-icons">account_circle</i></span> -->
					<br>
					<div class="row">
						<div class="col s12">
							<p><i class="tiny material-icons left">person</i>Annette J. Barrett</p>
						</div>
					</div>
					<div class="row">
						<div class="col s6">
							<p><i class="tiny material-icons left">event</i>05/04/1994</p>
						</div>
						<div class="col s6">
							<p><i class="tiny material-icons left">wc</i>Female</p>
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<p><i class="tiny material-icons left">email</i>AnnetteJBarrett@gustr.com</p>
						</div>
					</div>
					<div class="row" id="social-links">
						<div class="col s12 center-align">
							<a href="#" class="black-text"><i class="fa fa-3x fa-facebook-square"></i></a>
							<a href="#" class="black-text"><i class="fa fa-3x fa-instagram"></i></a>
							<a href="#" class="black-text"><i class="fa fa-3x fa-twitter-square"></i></a>
							<a href="#" class="black-text"><i class="fa fa-3x fa-github-square"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col s8">
			<div class="row">
				<div class="col s12">
					<ul class="collapsible" id="documents">
						<li>
							<div class="collapsible-header"><i class="small material-icons left">library_books</i>Documents (<span id="cant-docs">0</span>)</div>
							<div class="collapsible-body white">
								<br>
								<div class="row">
									<!-- <div class="document col s2 center-align">
										<a href="#" class="black-text">
											<i class="fa fa-3x fa-file-word-o"></i>
										</a>
										<p>assig.docx</p>
									</div> -->
								</div>	
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div id="courses" class="col s12">
					<ul class="collapsible" id="courses">
						<li>
							<div class="collapsible-header"><i class="small material-icons left">library_books</i>Courses (<span id="cant-courses">0</span>)</div>
							<div class="collapsible-body white">
								<br>
								<div class="row">
									<!-- <div class="course-card red lighten-1 col s12 center-align white-text">
										<div class="course-name">Curso 1</div>
										<div class="coach-name">Profesor Chancla</div>
										<div class="course-progress valign-wrapper center-align">progress</div>
										<div class="tasks-progress valign-wrapper center-align"> 5/9</div>
									</div> -->

									<table id="courses-res-table" class="white-text">
										<tr class="course red lighten-1">
											<td>
												<div class="course-name">Course 1</div>
												<div class="coach-name">#Coach Chancla</div>
											</td>
											<td><span class="course-progress">5,4,6,2,7,8,4,9</span></td>
											<td><span class="task-progress">81%</span></td>
										</tr>
									</table>
								</div>	
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
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

	<!-- JavaScript -->
	
	<!-- JQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<!-- JQuery UI -->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<!-- Materialize -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

	<!-- Propio -->
	<script src="./js/index.js"></script>
</body>
</html>