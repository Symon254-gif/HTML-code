<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="icon" href="logo.png" type="image/png">
	<link rel="icon" href="logo.png" type="image/png">
	<link rel="stylesheet" href="styles.css">
	<script defer src="script.js"></script>
    <title>Admin</title>
</head>
<body>
<nav class="navbar">
	<div class="brand-title"><p><img src="logo.png" alt="">Dekut Medical Website</p></div>
	<a href="#" class="toggle-button">
		<span class="bar"></span>
		<span class="bar"></span>
		<span class="bar"></span>
	</a>
	<div class="navbar-links">
		<ul>
			<li><a href="Home-page.html">Home</a></li>
			<li><a href="Contacts.html">Contacts</a></li>
		</ul>
	</div>
</nav>
	<form class="admin" method="post">
		<div class="container" id="admin-page">
			<h2>Enter details</h2>
			<input type="text" placeholder="Username" required ><br>
			<input type="password" placeholder="Enter Password" required><br>
			<button type="submit">Login</button><br>
		</div>
	</form>
</body>
</html>