<html>
<head>
	<title>User Sign In</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"> 
  
  </head>

<body>
<div class="container">
	<div class="login-box">
<div class="row">
	<div class="col-md-6 lpgin-left">
	<h2> Sign In</h2>

	<form action="validation.php" method="post">
		<div class="form-group">
		   <label>Username</label>
		   <input type="text" name="user" class="form-control" required>
		</div>

		<div class="form-group">
		   <label>Password</label>
		   <input type="password" name="password" class="form-control" required>
		</div>

		<button type="submit" class="btn btn-primary"> Sign In </button>
	</form>

         </div>	
      </div>
    </div>
  </div>


</body>


</html>
