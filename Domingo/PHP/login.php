<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class = "header">
<?php
include '../Include/Header.html'; 
?>
</div>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form name="register" action="login.php" method="POST">
                <table border="0" width="30">
                    <tbody>
					<tr>
                            <td>Username</td>
                            <td><input type="text" name="user" value="" /></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="pass" value="" disabled="disabled" /></td>
                        </tr>
                    </tbody>
                </table>
				<input type="submit" value="Login" name="submit" />	
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
<div class = "footer">
<?php
include '../Include/footer.html'; 
?>
</div>
</body>
</html>