<!DOCTYPE html>
<html>
<head>
	<title>Lead Generation Form</title>
</head>
<body>
	<h1>Lead Generation Form</h1>
	<form method="POST" action="submit.php">
		<label for="name">Name:</label>
		<input type="text" name="name" required>
		<br><br>
		<label for="email">Email:</label>
		<input type="email" name="email" required>
		<br><br>
		<label for="phone">Phone:</label>
		<input type="tel" name="phone" required>
		<br><br>
		<label for="message">Message:</label>
		<textarea name="message"></textarea>
		<br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
