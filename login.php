<?php
include("header.php");
?>

<main>
  <form class = "logsign">
    <h1>Login</h1>
    <label>Email Address</label>
    <input type = "email" class = "text" name = "email" placeholder = "you@yours.com" required>
    <label>Password</label>
    <input type = "password" class = "text" name = "password" placeholder = "Password" required>
    <input type = "submit" class = "btn" name = "submitLogin" value = "Login">
    <p style = "margin: 25px 0 0 0;">Not registered? <a href = "signup.php">Signup here</a>.</p>

  </form>
</main>

<?php
include("footer.php");
?>
