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
<h1 class="text-center">Welcome to Finance Department</h1>
<table class="table table-bordered">
<tr>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Adm No</th>
	<th>Fee Balance</th>
	</tr>
	<tr>
		
		<td>HUmphrey</td>
		<td>Mugambi</td>
		<td>7193</td>
		<td>0</td>
		<td><a href=""><button type="button" class="btn btn-primary btn-xs">Edit</button></a></td>
		</tr>
		<tr>
		<td>HUmphrey</td>
		<td>Mugambi</td>
		<td>7193</td>
		<td>0</td>
		<td><a href=""><button type="button" class="btn btn-primary btn-xs">Edit</button></a></td>
		</tr>
		<tr>
		<td>HUmphrey</td>
		<td>Mugambi</td>
		<td>7193</td>
		<td>0</td>
		<td><a href="#modal"><button type="button" class="btn btn-primary btn-xs">Edit</button></a></td>
		</tr>
	</tr>
</tr>
</table>
<div class="remodal" data-remodal-id="modal">
  <button data-remodal-action="close" class="remodal-close"></button>
  <h1>Edit Fee Balance</h1>
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
    <label for="fee">Fee Balance</label>
    <input type="number" class="form-control" id="fee" value="0">
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