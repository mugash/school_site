<?php
require 'header.php';
 ?> 
 <style type="text/css">
 	.a {
 		 padding-top: 150px;
 		 background-color: #eee;
 	}
 </style>

<div class="container a">
<h1>Add Student</h1>
<form>
  <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" id="firstName" placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" id="lastName" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label for="reg">Adm No</label>
    <input type="text" class="form-control" id="reg" placeholder="Adm No">
  </div>
    <div class="form-group">
    <label for="math">Maths</label>
    <input type="number" class="form-control" id="math" value="0">
  </div>
     <div class="form-group">
    <label for="Eng">English</label>
    <input type="number" class="form-control" id="Eng" value="0">
  </div>
     <div class="form-group">
    <label for="Kisw">Kiswahili</label>
    <input type="number" class="form-control" id="Kisw" value="0">
  </div>
     <div class="form-group">
    <label for="bio">biology</label>
    <input type="number" class="form-control" id="bio" value="0">
  </div>
     <div class="form-group">
    <label for="chem">chemistry</label>
    <input type="number" class="form-control" id="chem" value="0">
  </div>
  <div class="form-group">
    <label for="fee">Fee Balance</label>
    <input type="number" class="form-control" id="fee" value="0">
  </div>
  <button type="submit" class="btn btn-primary remodal-confirm" data-remodal-action="confirm">Submit</button>
</form>
</div>
<?php
    require 'footer.php';
     ?>