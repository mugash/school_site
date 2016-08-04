<?php
require 'header.php';
 ?> 
  
<link rel="stylesheet" href="../assests/css/login.css">
  <body>

      <div class="wrapper">
    <form class="form-signin" action="../controler/student_login.php" method="post">       
      <h2 class="form-signin-heading">STAFF  LOGIN PORTAL</h2>
      <input type="text" class="form-control" name="username" placeholder="Name" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>     
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
      <style type="text/css">
          span {
                 color: #ffffff;
          }
      </style>
    </form>
  </div>
    
    <?php
    require 'footer.php';
     ?>
    
  </body>
</html>
