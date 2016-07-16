<php
 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Hogwarts High School</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="../assests/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://bootswatch.com/flatly/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../assests/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!--Custom css -->
    <link href="../assests/css/footer-distributed-with-address-and-phones.css" rel="stylesheet">
    <link rel="stylesheet" href="../assests/css/style.css">
    <link rel="stylesheet" href="../assests/css/login.css">
    <!-- HTML5 Shim and Respond.js IE8 sup
    port of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
                <a class="navbar-brand" href="../index.php">Hogwarts High</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="../index.php"></a>
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
  </head>

  <body>

      <div class="wrapper">
    <form class="form-signin" action="../controler/student_login.php" method="post">       
      <h2 class="form-signin-heading">Student login</h2>
      <input type="text" class="form-control" name="username" placeholder="Name" required="" autofocus="" />
       <input type="text" class="form-control" name="regno" placeholder="Registration Number" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
      <style type="text/css">
          span {
                 color: #ffffff;
          }
      </style>
      <p style="color:red"></style>Login failed! Try again.</p>
      <p>Don't have an account yet?<br><a href="register.php"><span>Register Here</span></a></p>
    </form>
  </div>
    
    <footer class="footer-distributed" style="background-color: #2c3e50;">

      <div class="footer-left">

        <a href="index.php"><h3><span>HOGWARTS</span> HIGH</h3></a> 

        <p class="footer-links">
          <a href="../index.php">Home</a>.
          <a href="#">About Our School</a>
          ·
          <a href="#">Departments</a>
          ·
          <a href="#">Students</a>
          <a href="views/contact.php">Contact Us</a>
        </p>

        <p class="footer-company-name">Hogwarts High &copy; 2016</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>61,71900</span> Nyeri, Kenya</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+254 727-021-846</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@hogwartshigh.ac.ke">support@hogwartshigh.ac.ke</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About Our School</span>
         We are school ocated in blah blah bhaolks2iudshgs
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          

        </div>

      </div>

    </footer>
    <!-- jQuery -->
    <script src="../assests/js/jquery-1.12.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assests/js/bootstrap.min.js"></script>
    
    
    
  </body>
</html>

?>