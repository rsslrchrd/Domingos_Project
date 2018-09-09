<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Register</title>
    </head>
    <body>
        <div class = "header">
<?php
include '../Include/Header.html'; 
?>
</div>
        <h1>Register</h1>
        <form name="register" action="register.php" method="POST">
                <table border="0" width="30">
                    <tbody>
                        <tr>
                            <td>Firstname</td>
                            <td><input type="text" name="first" value="" /></td>
                        </tr>
                        <tr>
                            <td>Lastname</td>
                            <td><input type="text" name="last" value="" /></td>
                        </tr>
                        <tr>
                            <td>Street</td>
                            <td><input type="text" name="street" value="" /></td>
                        </tr>
                        <tr>
                            <td>Postcode</td>
                            <td><input type="text" name="post" value="" /></td>
                        </tr>
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
                <input type="reset" value="Clear" name="clear" />
                <input type="submit" value="Register" name="submit" />
				<p>
					Already a member? <a href="login.php">Sign in</a>
				</p>
        </form>
        <div class = "footer">
<?php
include '../Include/footer.html'; 
?>
</div>
    </body>
</html>
