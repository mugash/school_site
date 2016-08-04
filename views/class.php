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
<h2 class="text-center">Welcome to 4 WEST class system<a href="addmarks.php"><button style="float: right;" type="button" class="btn btn-primary btn-sm">Add marks</button></a></h2>
<form class="text-center form-inline">
<b>Sort the Students by:</b>
	<select>
  <option>The First Names</option>
  <option selected>By grade</option>
</select>
<b>Select the Form class to view:</b>
	<select>
  <option>Form 1A</option>
  <option>Form 1B</option>
  <option>Form 2A</option>
  <option>Form 2B</option>
  <option>Form 3A</option>
  <option>Form 3B</option>
  <option>Form 4A</option>
  <option>Form 4B</option>
</select>
</form>
<table class="table table-bordered">
<tr>
	<th>Position</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Adm No</th>
	<th>Maths</th>
	<th>English</th>
	<th>Kiswahili</th>
	<th>Biology</th>
	<th>Chemistry</th>
	<th>Total</th>
	<th>Average</th>
	<th>Grade</th>
	</tr>
	<tr>
		<td>1</td>
		<td>HUmphrey</td>
		<td>Mugambi</td>
		<td>7193</td>
		<td>89</td>
		<td>60</td>
		<td>89</td>
		<td>89</td>
		<td>90</td>
		<td>490</td>
		<td>78</td>
		<td>A</td>
		<td><a href=""><button type="button" class="btn btn-primary btn-xs">Edit</button></a></td>
		</tr>
		<tr>
		<td>2</td>
		<td>HUmphrey</td>
		<td>Mugambi</td>
		<td>7193</td>
		<td>89</td>
		<td>60</td>
		<td>89</td>
		<td>89</td>
		<td>90</td>
		<td>490</td>
		<td>78</td>
		<td>A</td>
		<td><a href=""><button type="button" class="btn btn-primary btn-xs">Edit</button></a></td>
		</tr>
		<tr>
		<td>3</td>
		<td>HUmphrey</td>
		<td>Mugambi</td>
		<td>7193</td>
		<td>89</td>
		<td>60</td>
		<td>89</td>
		<td>89</td>
		<td>90</td>
		<td>490</td>
		<td>78</td>
		<td>A</td>
		<td><a href="#modal"><button type="button" class="btn btn-primary btn-xs">Edit</button></a></td>
		</tr>
	</tr>
</tr>
</table>
<div class="remodal" data-remodal-id="modal">
  <button data-remodal-action="close" class="remodal-close"></button>
  <h1>Edit Student Marks</h1>
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
    