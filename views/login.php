<?php
require 'header.php';
 ?> 
  
<link rel="stylesheet" href="../assests/css/login.css">
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
      <p>Don't have an account yet?<br><a href="register.php"><span class="text-info">Register Here</span></a></p>
    </form>
  </div>
    
    <?php
    require 'footer.php';
     ?>
    
  </body>
</html>
