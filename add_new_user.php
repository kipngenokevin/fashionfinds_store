<!DOCTYPE html>
<html>
<head>
	<title>Add New User</title>
</head>
<body>
	<h1>Add New User</h1>
	<form action="add_user.php" method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br><br>
		<input type="submit" value="Add User">
	</form>
</body>
</html>
