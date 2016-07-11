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
    <link href="assests/css/jquery.bxslider.css" rel="stylesheet" >
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
                        <a href="views/contact.php">Contact Us</a>
                    </li>
                    <li class="page-scroll">
                    <a href="views/login.php"><button type="button" class="btn btn-success">Login</button></a>
                  </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container">
    <div class="jumbotron">
    <h1 class="h1">WELCOME TO HOGWARTS HIGH SCHOOL</h1>
      
      <ul class="bxslider">
  <li><img class="image-responsive" src="http://p2phelps.org/wp-content/uploads/2014/11/HS-Students.jpg" title="Funky students" /></li>
  <li><img class="image-responsive" src="http://www.easy-fundraising-ideas.com/images-v6/high-school-students.jpg" title="The long and winding road" /></li>
  <li><img class="image-responsive" src="http://apsva.us/wp-content/uploads/legacy_assets/washingtonlee/57de3fc5ff-KS97573.jpg" title="Happy trees" /></li>
  <li><img class="image-responsive" src="http://www.gocollege.com/images/preparing-for-college-in-high-school.jpg" title="The long and winding road" /></li>
</ul>
</div>
<div class="row">
<div class="col-sm-4">
<h2 class="h2">Our School</h2>
<hr>
<a href="#" class="thumbnail">
      <img src="http://i.huffpost.com/gen/1760918/images/o-HIGH-SCHOOL-BUILDING-facebook.jpg" alt="Thumbnail">
    </a>
<p>Rows must be placed within a .container (fixed-width) or .container-fluid (full-width) for proper alignment and padding
Use rows to create horizontal groups of columns
Content should be placed within columns, and only columns may be immediate children of rows
Predefined classes like .row and .col-sm-4 are available for quickly making grid layouts
Columns create gutters (gaps between column content) via padding. That padding is offset in rows for the first and last column via negative margin on .rows
Grid columns are created by specifying the number of 12 available columns you wish to span. For example, three equal columns would use three .col-sm-4
</p>
<hr>
</div>
<div class="col-sm-4">
    <h2 class="h2">Upcoming events</h2>
    <hr>
    <ul class="list-group">
   <a href="#"><li class="list-group-item">
  Spring 2017 term begin</a>
 <h4><small>January 17 2017</small></h4>
  </li>
  <a href="#"><li class="list-group-item">Predefined classes like .row and .col-sm-4 are available for quickly making grid layouts</a><h4><small>January 17 2017</small></h4></li>
  <a href="#"><li class="list-group-item">Predefined classes like .row and .col-sm-4 are available for quickly making grid layouts</a><h4><small>January 17 2017</small></h4></li>
  <a href="#"><li class="list-group-item">Predefined classes like .row and .col-sm-4 are available for quickly making grid layouts</a><h4><small>January 17 2017</small></h4></li>
  <a href="#"><li class="list-group-item">Predefined classes like .row and .col-sm-4 are available for quickly making grid layouts</a><h4><small>January 17 2017</small></h4></li>
  <li class="list-group-item text-center "><button type="button" class="btn btn-success">View More</button></li>
</ul>
</div>
    
</div>
    <!-- jQuery -->
    <script src="assests/js/jquery-1.12.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assests/js/bootstrap.min.js"></script>
    <script src="assests/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
  $('.bxslider').bxSlider( {
    captions: true,
    auto:true,
    autoControl:true
  });
});
    </script>



  </body>
  </html>
