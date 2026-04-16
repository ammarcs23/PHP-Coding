<html>
<body>

<h2>GET Form (Same as POST + Validation)</h2>

<form action="welcome_get.php" method="get">

  Name:
  <input type="text" name="name" required 
  pattern="^[A-Za-z ]+$" 
  minlength="3"
  title="Only letters and spaces allowed (no numbers)">
  <br><br>

  Email:
  <input type="email" name="email" required>
  <br><br>

  Password:
  <input type="password" name="password" required minlength="6">
  <br><br>

  Phone:
  <input type="tel" name="phone" required 
  pattern="^[0-9]{11}$" 
  title="Enter exactly 11 digits">
  <br><br>

  <input type="submit" value="Submit">

</form>

</body>
</html>