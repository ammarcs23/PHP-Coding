<html>
<body>

<h2>POST Form (HTML Validation)</h2>

<form action="welcome_post.php" method="post">

  Name:
  <input type="text" required pattern="[A-Za-z]+" name="name" required minlength="3" maxlength="20">
  <br><br>

  Email:
  <input type="email" name="email" required>
  <br><br>

  Password:
  <input type="password" name="password" required minlength="6">
  <br><br>

  Phone:
  <input type="tel" name="phone" pattern="[0-9]{11}" required>
  <small>Enter 11 digit number</small>
  <br><br>

  <input type="submit" value="Submit">

</form>

</body>
</html>