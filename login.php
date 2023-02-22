<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">

	<title>Login</title>
</head>
<body>
		<div id="frm">
			<form action="process.php" method="POST">
				<p>
					<label>Username:</label>
					<input type="text" name="username" />
				</p>

				<p>
					<label>Password:</label>
					<input type="password" name="password" />
				</p>


				<p>
					<input type="submit" id="btn" value="Login" />
				</p>
		</div>
</body>
</html>