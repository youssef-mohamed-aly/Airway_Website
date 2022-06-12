<html>

<head>
<?php
include_once 'qc_home.html'
?>

	   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
	<div class="card">
		<div class="card-header">
			<h2 class="text-center">New customer service</h2>
		</div>
		<div class="card-body">
			
		<form method="POST" action="new_css.php">

			
<div class="form-group">

	<label for="name" class="control-label"><h5>Full Name</h5></label>
	<input type="text" id="name" name="name" class="form-control" >

</div>

<div class="form-group">
	<label id="email" class="control-label"><h5>Email</h5></label>
	<input type="text" for="email" name="email" class="form-control">
</div>

<div class="form-group">
	<label id="password" class="control-label"><h5>Password</h5></label>
	<input type="password" for="password" name="password" class="form-control">
</div>

<div class="form-group">

	<label id="natid" class="control-label"><h5>National ID</h5></label>
	<input type="text" for="natid" name="natid" class="form-control">
</div>

<div class="form-group">
	<label id="phone" class="control-label"><h5>Phone Number</h5></label>
	<input type="number" for="phone" name="phone" class="form-control">
</div>

<div class="form-group">
	<label id="address" class="control-label"><h5>address </h5></label>
	<input type="text" for="address" name="address" class="form-control">
</div>

<div class="form-group">
	<label id="pstal_code" class="control-label"><h5>postal code</h5></label>
	<input type="text" for="name" name="postal_code" class="form-control">
</div>
<div class="form-group">
	<label id="country" class="control-label"><h5>country</h5></label>
	<input type="text" for="country" name="country" class="form-control">
</div>
	
	<div class="form-group">
	<label id="nationality" class="control-label" ><h5>nationality </h5></label>
	<input type="text" for="nationality" name="nationality" class="form-control">
</div>
<div class="form-group">
	<label id="role"class="control-label"><h5>role </h5></label>
	<input type="text" for="role" name="role" class="form-control">
</div>
<div class="form-group">
	<label for="cs_status" class="control-label" ><h5>status</h5></label>
	<input type="text" id="cs_status" name="cs_status" class="form-control">
</div>

	<p for="cs_status"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-octagon" viewBox="0 0 16 16">
		<path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z"/>
		<path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
	  </svg> <strong>   for stauts enter 0 for enable and 1 for disable </strong> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
		<path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
		<path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
	  </svg></p>
	<br>
	<input class="btn btn-primary" type="submit" >
	<input class="btn btn-primary" type="reset">


	</form>    

</div>

</body>
<script>
/*
function click(){
    
   
	$.ajax({
		 type: "POST",
		 url: 'new_cs.php',
		 data: {
		 
		 },
		 success:function(data)
				  {
				  alert("submited");                     
				  }
 
	});
 
 
 }
 */
 </script>

</script>

</html>