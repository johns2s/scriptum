<?php
include("header.php");
?>

<main>
  <div class = "postWrap">
    <input type = "radio" name = "tab" id = "tab0" hidden checked = "">
    <input type = "radio" name = "tab" id = "tab1" hidden>
    <div class = "userHeader">
      <h1>John Sarbak</h1>
      <div id = "tabs">
        <label class = "tab" id = "tab0Label" for = "tab0">Posts</label>
        <label class = "tab" id = "tab1Label" for = "tab1">About</label>
      </div>
    </div>

    <div id = "posts" class = "postPrevWrap">
      <a class = "postPrev" href = "#">
        <h3 class = "postPrevTitle">Roundup 2</h3>
        <p class = "postPrevDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p class = "postPrevDate">8/13/18</p>
      </a>
      <a class = "postPrev" href = "#">
        <h3 class = "postPrevTitle">Roundup 2</h3>
        <p class = "postPrevDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p class = "postPrevDate">8/13/18</p>
      </a>
      <a class = "postPrev" href = "#">
        <h3 class = "postPrevTitle">Roundup 2</h3>
        <p class = "postPrevDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p class = "postPrevDate">8/13/18</p>
      </a>
      <a class = "postPrev" href = "#">
        <h3 class = "postPrevTitle">Roundup 2</h3>
        <p class = "postPrevDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p class = "postPrevDate">8/13/18</p>
      </a>
      <a class = "postPrev" href = "#">
        <h3 class = "postPrevTitle">Roundup 2</h3>
        <p class = "postPrevDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p class = "postPrevDate">8/13/18</p>
      </a>
      <a class = "postPrev" href = "#">
        <h3 class = "postPrevTitle">Roundup 2</h3>
        <p class = "postPrevDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p class = "postPrevDate">8/13/18</p>
      </a>
      <a class = "postPrev" href = "#">
        <h3 class = "postPrevTitle">Roundup 2</h3>
        <p class = "postPrevDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p class = "postPrevDate">8/13/18</p>
      </a>
      <a class = "postPrev" href = "#">
        <h3 class = "postPrevTitle">Roundup 2</h3>
        <p class = "postPrevDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p class = "postPrevDate">8/13/18</p>
      </a>

    </div>
    <div id = "about">
      <div class = "webWrap" style = "margin-bottom: 25px">
        <a class = "webItem" href = "https://johnsarbak.com"><img src = "media/link.png" alt = "link icon">Website</a>
        <a class = "webItem" href = "https://twitter.com"><img src = "media/twitter.png" alt = "twitter icon">Twitter</a>
        <a class = "webItem" href = "https://argonbay.co"><img src = "media/business.png" alt = "company icon">Company</a>
      </div>

      <p style = "font-family: 'Oswald', sans-serif">Hi, my name's John Sarbak, and I'm the lead developer of this site, Scriptum.  I do lots of stuff and this is proof right here because you're here and everyone is here yay.</p>
      <label>Stats</label>
      <div class = "statWrap"  style = "margin-bottom: 25px"> <!-- .stat AND .statOut LOOK REDUNDANT BUT THEY ARE NOT. KEEP THEM OR SITE WILL BREAK (also these are manually coded to account for @media, so ajust accordingly)-->
        <div class = "statOut"><div class = "stat"><h2>15k</h2><p>words</p></div></div>
        <div class = "statOut"><div class = "stat"><h2>2</h2><p>Scribos</p></div></div>
        <div class = "statOut"><div class = "stat"><h2>152</h2><p>posts</p></div></div>
        <div class = "statOut"><div class = "stat"><h2>1</h2><p>year on Scriptum</p></div></div>
    </div>
      <label>Scribos</label>
      <div class = "listWrap" style = "margin-bottom: 25px">
        <a class = "listItem" href = "#">
          <h3>Changelog</h3>
          <p>The official changlog of Scriptum</p>
        </a>
        <a class = "listItem" href = "#">
          <h3>Poltics</h3>
          <p>My unfiltered political thoughts & commentary.</p>
        </a>
    </div>

</main>

<?php
include("footer.php");
?>
