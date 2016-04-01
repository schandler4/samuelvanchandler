<?php header("Location: ..", true, 301);?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
				integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!--		Optional theme-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
				integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<!-- Font Awesome -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
				rel="stylesheet"/>

		<link type="text/css" href="css/styles.css" rel="stylesheet">

		<!--		 jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<!--		 Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>
		<script src="js/custom.js" type="text/javascript"></script>
		<title>samuelvanchandler</title>
	</head>

	<header id="top">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#top">Top</a></li>
						<li><a href="#works">Works</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</header>
	<div class="wide Aligner">
		<div class="Aligner-item Aligner-item--top"></div>
		<div class="Aligner-item"><h1>Samuel Van Chandler</h1></div>
		<div class="Aligner-item Aligner-item--bottom"></div>
	</div>
	<section>
		<div id="works" class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<h2>Works</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<h4>TimeCrunch</h4>
					<a href="img/time-crunch-crop.jpg" class="thumbnail">
						<img src="img/time-crunch-crop.jpg" alt="TimeCrunch" class="img-responsive">
					</a>
				</div>
				<div class="col-md-4">
					<h4>Townie</h4>
					<a href="pages/townie.php">right here!!!</a>
				</div>
			</div>
	</section>
	<footer>
		<div id="contact" class="container">
			<h2>Contact</h2>
			<div class="row">
				<div class="col-md-12">
					<!-- look at Bootstrap nav links -->
					<ul class="nav navbar-nav">
						<li><a href="https://github.com/schandler4">Github</a></li>
						<li><a href="https://www.linkedin.com/in/samuel-chandler-29435a116">Linkedin</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<form action="php/mailer.php" method="post">
						<div class="form-group">
							<label for="name">Name</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="name" name="name" placeholder="Name">
							</div>
						</div>
						<div class="form-group">
							<label for="email">Email address</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="subject">Subject</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-pencil" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
							</div>
						</div>
						<div class="form-group">
							<label for="message">Message</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-comment" aria-hidden="true"></i>
								</div>
								<textarea class="form-control" rows="5" id="message" name="message"
											 placeholder="Message"></textarea>
							</div>
						</div>
						<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
						<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
					</form>
					<div id="output-area"></div>
					<div class="col-md-2"></div>
				</div>
			</div>
		</div>
	</footer>
</html>