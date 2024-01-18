<!DOCTYPE html>
<html>
<head>
	<title>loginform</title>
	<style>
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}
		input[type="text"], input[type="password"] {
			padding: 10px;
			margin: 10px;
			border-radius: 5px;
		}
		input[type="submit"] {
			padding: 10px 20px;
			margin: 10px;
			border-radius: 5px;
		    border:rgb(40, 110, 207);
			background-color: #007bff;
			color: #fff;
		}
		input[type="submit"]:hover {
			background-color: #2974c4;
		}
	</style>
</head>
<body>
    <?php
        if(isset($_GET['error']) && $_GET['error'] == 1) {
            echo "<p style='color: red; font-weight: bold;'>Invalid username or password. Please try again.</p>";
        }
    ?>
	<form name="f" action="authent.php" method="POST">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" placeholder="Enter your username" required>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" placeholder="Enter your password" required>
		<input type="submit" value="Login">
	</form>
</body>
</html>