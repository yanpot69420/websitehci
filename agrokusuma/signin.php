<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="css/styleindex.css">
	<link rel="icon" type="image/png" href="gambar/logo.png">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>SIGN IN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="uname" placeholder=""><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder=""><br>

     	<button type="submit">Sign In</button>
		  <p>Not a member? <a href="signup.php" class="ca">Sign Up Now</a></p>
     </form>
</body>
</html>