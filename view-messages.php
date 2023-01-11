<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="logo.png" type="image/png">
  <link rel="stylesheet" href="styles.css">
  <script defer src="script.js"></script>
  <title>View Message</title>
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
      <li><a href="#">About</a></li>
      <li><a href="#">Contacts</a></li>
    </ul>
  </div>
</nav>
<div class="messages">
  <h2><strong>Responses Received</strong></h2>
  <table border="1"style="overflow:scroll;
                                background-color:#ADD8E6;
                                border: 1px solid gray;">
    <tr style="background-color:#F0E68C">
      <td>Registration No</td>
      <td>Symptoms</td>
    </tr>
    <?php include("getresponses.php"); ?>
  </table>
  <form method="post">
  <h3>Reply to</h3><br>
  <input type="text" placeholder="Student reg. no." required><br>
  <h2>Enter Reply</h2>
  <textarea id="textarea" name="textarea" placeholder="Advise here"></textarea>
  <input type="button" value="Send"><br>
  </form>
</div>
</body>
</html>