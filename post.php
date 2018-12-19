<?php
include("header.php");
?>

<main>
  <div class = "postWrap">
    <div class = "post">
      <a href = "post.php" style = "display: inline-block; margin-bottom: 25px;"><h1 style = "margin: 0;">Roundup 2</h1></a>
      <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet eros finibus, consectetur quam nec, aliquam arcu. Integer mattis, leo eu viverra euismod, diam orci tincidunt magna, in cursus sapien ex ut tortor. Maecenas vitae blandit nibh, vitae tempus augue. Morbi a sapien lacus. Donec fringilla odio at ante fringilla, vel tempor justo tincidunt. Phasellus neque ex, commodo eget rutrum ac, venenatis at turpis. Duis pharetra dictum mauris, at tempus lectus viverra in. Nam eleifend felis leo, vitae maximus nunc blandit eu. Nunc a ligula ac est consectetur facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet eros finibus, consectetur quam nec, aliquam arcu. Integer mattis, leo eu viverra euismod, diam orci tincidunt magna, in cursus sapien ex ut tortor. Maecenas vitae blandit nibh, vitae tempus augue. Morbi a sapien lacus. Donec fringilla odio at ante fringilla, vel tempor justo tincidunt. Phasellus neque ex, commodo eget rutrum ac, venenatis at turpis. Duis pharetra dictum mauris, at tempus lectus viverra in. Nam eleifend felis leo, vitae maximus nunc blandit eu. Nunc a ligula ac est consectetur facilisis. </p>
      <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet eros finibus, consectetur quam nec, aliquam arcu. Integer mattis, leo eu viverra euismod, diam orci tincidunt magna, in cursus sapien ex ut tortor. Maecenas vitae blandit nibh, vitae tempus augue. Morbi a sapien lacus. Donec fringilla odio at ante fringilla, vel tempor justo tincidunt. Phasellus neque ex, commodo eget rutrum ac, venenatis at turpis. Duis pharetra dictum mauris, at tempus lectus viverra in. Nam eleifend felis leo, vitae maximus nunc blandit eu. Nunc a ligula ac est consectetur facilisis.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet eros finibus, consectetur quam nec, aliquam arcu. Integer mattis, leo eu viverra euismod, diam orci tincidunt magna, in cursus sapien ex ut tortor. Maecenas vitae blandit nibh, vitae tempus augue. Morbi a sapien lacus. Donec fringilla odio at ante fringilla, vel tempor justo tincidunt. Phasellus neque ex, commodo eget rutrum ac, venenatis at turpis. Duis pharetra dictum mauris, at tempus lectus viverra in. Nam eleifend felis leo, vitae maximus nunc blandit eu. Nunc a ligula ac est consectetur facilisis. </p>
    </div>
  </div>
  <input type = "checkbox" id = "toggleSidebar" hidden>
  <label for = "toggleSidebar" class = "toggleLabel">
    <img class = "toggle" alt = "Menu icon" title = "Toggle sidebar" src = "media/menu.png">
  </label>
  <div class = "hiddenInfo">
    <div class = "hIHead">
      <a href = "scribo.php" class = "hIHeadA">Changelog</a>
    </div>
    <div class = "hiddenInfoContent">
      <p style = "font-family: 'Oswald', sans-serif">Welcome to Scriptum's official Scribo! We post announcements, news, and more here. :)</p>
      <label>About the author</label>
      <p class = "inset">John Sarbak is the lead developer of Scriptum. <a href = "user.php">Full bio ➞</a></p>
      <label>Stats</label>
      <p class = "inset">8 posts, consisting of a total of 6k words, have been published to changelog this year.</p>
    </div>
  </div>

</main>

<?php
include("footer.php");
?>
