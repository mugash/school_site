<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hogwarts High School</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="assests/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://bootswatch.com/flatly/bootstrap.min.css" rel="stylesheet">
    <link href="assests/css/unslider.css">
    <link href="assests/css/unslider-dots.css">

    <!-- Custom CSS -->
    <link href="assests/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!--Custom css -->
      <link href="assests/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Hogwarts High</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">About Our School</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Departments</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Students</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact Us</a>
                    </li>
                    <li class="page-scroll">
                    <a href="#"><button type="button" class="btn btn-success">Login</button></a>
                  </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container">
  <div class="jumbotron">
    <div class="container">
      <section class="banner">
		<ul>
			<li>
				<div class="slide-text">
					<h1>Unslider Example</h1>
					<p>More advanced options</p>
				</div>
				<img src="images/http://p2phelps.org/wp-content/uploads/2014/11/HS-Students.jpg" alt="Pen and ink painting">
			</li>
			<li>
				<div class="slide-text">
					<p>You can show the dots on the bottom, along with other options.</p>
					<p>This slider is set to fill the page width.</p>
				</div>
				<img src="images/http://p2phelps.org/wp-content/uploads/2014/11/HS-Students.jpg" alt="Pen and ink painting">
			</li>
			<li>
				<div class="slide-text">
					<p>Sewing machines by KJ James.</p>
					<p><a href="http://artsaintjames.com" title="KJ James">artsaintjames.com</a></p>
				</div>
				<img src="images/http://p2phelps.org/wp-content/uploads/2014/11/HS-Students.jpg" alt="Pen and ink painting">
			</li>
		</ul>
	</section>
</div>
    <!-- jQuery -->
    <script src="assests/js/jquery-1.12.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assests/js/bootstrap.min.js"></script>

    <!--script to add slider on page-->
    <script src="assests/jsunslider-min.js"></script>
    <script>
		$(function() {
			$('.banner').unslider({
				autoplay: true,           //  Automatically start the slideshow
				speed: 1000,              //  The speed to animate each slide (in milliseconds)
				delay: 6000,              //  The delay between slide animations (in milliseconds)
				nav: true,                //  Generate an automatic clickable navigation for each slide in your slider
				infinite: true,
				animation: 'fade',        // 	How Unslider animates each slide
				                          //  	'horizontal', which moves the slides from left-to-right
				                          //  	'vertical', which moves the slides from top-to-bottom
				                          //  	'fade', which crossfades slides
				arrows: true             //  Show the nav arrows
			});
		});
	</script>

  </body>
  </html>
