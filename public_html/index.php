<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link type="text/css" href="css/styles.css" rel="stylesheet" />
		<!--Optional theme-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<!--Latest compiled and minified Bootstrap JavaScript, all compiled plugins included-->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<title>samuelvanchandler</title>
	</head>
	<body>
		<section id="topbgimage"><!-- apply bg image here using CSS background-image  -->
			<header id="top">
				<div class="jumbotron">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1>Welcome text here... Name, purpose... etc</h1>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- look at bootstrap nav add it here-->
			<nav class="navbar navbar-inverse">-->
				<!-- logo and mobile toggle button get grouped together for better mobile display -->
				<div class="navbar-header">
					<!-- this is the mobile menu button -->
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-menu">
						<span class="sr-only">main menu</span>
						<span class="glyphicon glyphicon-menu-hamburger"></span>
					</button>
					<a class="navbar-brand" href="#">Your Logo/Text Here</a>
				</div>

				<!-- here are your main nav links, grouped for toggling -->
				<div class="collapse navbar-collapse" id="main-menu">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#top">Top</a></li>
						<li><a href="#works">Works</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</nav>
		</section>
		<section>
			<div class="container-fluid">
				<div class="row">
					<div id="works" class="col-xs-12">
						<h2>Projects</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="img/panda-sleep-2.jpg" class="pandapic">
							<img src="img/panda-sleep-2.jpg" alt="panda">
						</a>
					</div>
					<div class="col-md-4">
						<!-- look at Boostrap thumbnails -->
						<a href="img/Panda_Cub.JPG" class="pandapic">
							<img src="img/Panda_Cub.JPG" alt="panda">
						</a>
					</div>
					<div class="col-md-4">
						<!-- look at Boostrap thumbnails -->
						<a href="img/panda-sleep-2.jpg" class="pandapic">
							<img src="img/panda-sleep-2.jpg" alt="panda">
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<!-- look at Boostrap thumbnails -->
						<a href="img/t1largpanda.jpg"  class="pandapic">
							<img src="img/t1largpanda.jpg" alt="panda">
						</a>
					</div>
					<div class="col-md-4 col-md-offset-2">
						<!-- look at Boostrap thumbnails -->
						<a href="img/panda-sleep-2.jpg" class="pandapic">
							<img src="img/panda-sleep-2.jpg" alt="panda">
						</a>
					</div>
				</div>
			</div>
		</section>
		​
		<footer>
			<div id="contact" class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- look at Bootstrap nav links -->
						<ul class="nav">
							<li>link</li>
							<li>link</li>
							<li>link</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>
<!--	<body>-->
<!--		<div class="jumbotron">-->
<!--			<div class="container">-->
<!--				<h1>samuelvanchandler</h1>-->
<!--				<p>hey, it's a site....</p>-->
<!--				<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>-->
<!--			</div>-->
<!--			<nav class="navbar navbar-inverse">-->
<!--				<!-- logo and mobile toggle button get grouped together for better mobile display -->-->
<!--				<div class="navbar-header">-->
<!--					<!-- this is the mobile menu button -->-->
<!--					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-menu">-->
<!--						<span class="sr-only">main menu</span>-->
<!--						<span class="glyphicon glyphicon-menu-hamburger"></span>-->
<!--					</button>-->
<!--					<a class="navbar-brand" href="#">Your Logo/Text Here</a>-->
<!--				</div>-->
<!---->
<!--				<!-- here are your main nav links, grouped for toggling -->-->
<!--				<div class="collapse navbar-collapse" id="main-menu">-->
<!--					<ul class="nav navbar-nav navbar-right">-->
<!--						<li><a href="#">Home</a></li>-->
<!--						<li><a href="#">Link1</a></li>-->
<!--						<li><a href="#">Link2</a></li>-->
<!--						<li><a href="#">Link3</a></li>-->
<!--					</ul>-->
<!--				</div>-->
<!--			</nav>-->
<!--		</div>-->
<!--		<img src="documentation/image/wireframes.gif" alt="wireframes" />-->
<!--	</body>-->
<!--</html>-->
