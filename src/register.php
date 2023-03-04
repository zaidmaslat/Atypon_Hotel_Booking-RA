<?php 

?>

<body>
<title>Create a user</title>
</body>

<form action="/createUser.php">
  User Name:<br>
  <input type="text" name="userName" value=""><br>
  E-Mail:<br>
  <input type="email" name="email" value=""><br>
  Password 
  <input type="password" name="password" value=""><br> 
  Role:<br>
  <select name="role">
    <option value="manager">Manager</option>
    <option value="user">User</option>
  </select><br>
  <input type="submit" value="Submit">
</form> 
