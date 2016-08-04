<?php
require 'header.php';
 ?>
 <link rel="stylesheet" href="../assests/css/remodal.css">
<link rel="stylesheet" href="../assests/css/remodal-default-theme.css">
  <style type="text/css">
 	.a {
 		 padding-top: 150px;
 		 background-color: #eee;
 	}
 	a {
 		color: black;
 	}
 </style>

<div class="container a">
<h2 class="text-center">Welcome to 4 WEST class system - Add Marks</h2>
<table class="table table-bordered">
<tr>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Adm No</th>
	</tr>
	<tr>
		
		<td>HUmphrey</td>
		<td>Mugambi</td>
		<td>7193</td>
		<td><a href="#modal"><button type="button" class="btn btn-primary btn-xs">Add marks</button></a></td>
		</tr>
		<tr>
		<td>HUmphrey</td>
		<td>Mugambi</td>
		<td>7193</td>
		<td><a href="#modal"><button type="button" class="btn btn-primary btn-xs">Add marks</button></a></td>
		</tr>
		<tr>
		<td>HUmphrey</td>
		<td>Mugambi</td>
		<td>7193</td>
		<td><a href="#modal"><button type="button" class="btn btn-primary btn-xs">Add Marks</button></a></td>
		</tr>
	</tr>
</tr>
</table>
<div class="remodal" data-remodal-id="modal">
  <button data-remodal-action="close" class="remodal-close"></button>
  <h1>Add Student Marks</h1>
   <form>
  <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" id="firstName" value="Humphrey">
  </div>
  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" id="lastName" value="Mugambi">
  </div>
  <div class="form-group">
    <label for="reg">Adm No</label>
    <input type="text" class="form-control" id="reg" value="7193">
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
  <button type="submit" class="btn btn-primary remodal-confirm" data-remodal-action="confirm">Submit</button>
</form>
  <br>
  <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
</div>
</div>
 <?php
    require 'footer.php';
     ?>
     <script src="../assests/js/remodal.min.js"></script>
</body>
</html>
    