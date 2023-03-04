<?php
echo "<h1 style=\"text-align:center; font-size:50px;\">Login Page</h1>";
if (isset($_GET['notFound'])) {
  echo '<h3 style="color:red">User or Password Not found</h3>';
}
?>

<form action="doLogin.php" method="post">
  <label>Email:</label> <input type="text" name="email"><br />
  <label>Password:</label> <input type="password" name="password"><br />
  <input type="submit" value="Login">
</form>


<?php
echo "<h1 style='color:blue;'><a href='register.php'>Register</a></h1>";
?>