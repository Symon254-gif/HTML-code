<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <meta charset="UTF-8">
    <link rel="icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
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
            <li><a href="Sign-in.html">Sign in</a></li>
            <li><a href="Contacts.html">Contacts</a></li>
        </ul>
    </div>
</nav>
<form method="post">
    <div class="imgcontainer">
        <img src="students.png" class="avatar">
        <h2><b>Sign Up</b></h2>
    </div>

    <div class="container">

        <input type="email" placeholder="Email Address" required ><br>
        <input type="text" placeholder="Registration Number" required ><br>
        <input type="password" placeholder="New Password" required><br>
        <input type="password" placeholder="Confirm Password" required><br>
        <button type="submit">Sign up</button><br>
        <label><input type="checkbox" checked="checked" name="remember">Remember me?</label>

        <div class="sgn-up-and-forgot-email">
            <p>Already have an account?<a href="#">Sign In</a></p>
            <p><a href="#">Forgot Password</a></p>
        </div>
    </div>
</form>

</body>
</html>