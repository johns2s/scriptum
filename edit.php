<?php
include("header.php");
?>

<script src = "auto-resize.js"></script>
<main>
  <form class = "postWrap">
    <div class = "postEditHeader">
      <input type = "text" class = "editTitle" name = "postTitle" placeholder = "Name your creation" required>
      <input type = "submit" class = "btn" name = "submitPost" value = "Publish">
    </div>
    <textarea auto-resize class = "editBody" name = "postBody" placeholder = "“There is no greater agony than bearing an untold story inside you.” ― Maya Angelou" required></textarea>
  </form>
</main>

<?php
include("footer.php");
?>
