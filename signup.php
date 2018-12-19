<?php
include("header.php");
?>

<main>
  <form class = "logsign">
    <h1>Signup</h1>
    <label>Invitation code (<a href = "invite.php">Request an invitation</a>)</label>
    <input type = "text" class = "text" name = "name" placeholder = "Paste your invitation code here" required>
    <label>Username</label>
    <input type = "text" class = "text" name = "name" placeholder = "Create a username" required>
    <label>Email Address</label>
    <input type = "email" class = "text" name = "email" placeholder = "you@yours.com" required>
    <label>Password</label>
    <input type = "password" class = "text" name = "password" placeholder = "Password" required>
    <input type = "submit" class = "btn" name = "submitSignup" value = "Signup">
    <p style = "margin: 25px 0 0 0;">Already registered? <a href = "login.php">Login here</a>.</p>

  </form>
</main>

<?php
include("footer.php");
?>
