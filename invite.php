<?php
include("header.php");
?>

<main>
  <div class = "inviteCols">
    <div>
      <div class = "lInvite">
        <h1>Why join Scriptum?</h1>
        <p style = "font-family: 'Oswald', sans-serif">Scriptum is an idea-sharing community that needs thinkers like you to share your unique perspectives, from foreign-policy analysis, to travel guides, to world-changing manifestos, and everything in between.</p>
        <label>Why do I need to get an invitation?</label>
        <p>The cornerstones of our platform are trust and quality, and to do that, we need to verify that you know what you're talking about and will be able to produce quality, thoughtful, and original content before you join.</p>
        <label>Vouching</label>
        <p>In addition to manual account review, we have plenty of features to increase trust on our platform. Members can vouch for other members (a sort-of peer review), and people with a high enough reputation can make correction suggestions to others' posts.</p>
        <label>What you can do with an account</label>
        <ul>
          <li>Create Scribos & posts</li>
          <li>Comment on other's posts</li>
          <li>Become part of a respected idea-sharing community where your opinion matters & connect with other thinkers</li>
        </ul>
        <label>Responsabilities</label>
        <ul style = "margin-bottom: 0">
          <li>Cite your sources: We're not in the business of creating polarised, clickbaity fake news</li>
          <li>Rate others' content</li>
        </ul>
      </div>
    </div>
    <div>
      <form class = "rInvite">
        <h1>Request an invitation.</h1>
        <label>Email Address</label>
        <input type = "email" class = "text" name = "email" placeholder = "you@yours.com" required>
        <label>About you</label>
        <textarea class = "text txtArea" name = "name" placeholder = "What is your area of expertise? What unique life experiences do you have? What qualitications do you have? Why do you believe you are a good fit for Scriptum?" required></textarea>
        <label>Links</label>
        <textarea class = "text txtArea" name = "name" placeholder = "Proof of qualification/activities, personal websites/social media, writing portfolio, etc" required></textarea>
        <input type = "submit" class = "btn" name = "submitSignup" value = "Submit for review">
        <p style = "margin: 25px 0 0 0;">Have a code? <a href = "signup.php">Signup here</a>.</p>
      </form>
    </div>
  </div>

</main>
<?php
include("footer.php");
?>
