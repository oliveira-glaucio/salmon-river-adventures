<!DOCTYPE html>
<html lang="en-us">
<head>
  <?php 
  $title = 'Contact';
  include 'modules/head.php'; ?> 
</head>
<body>

  <header>
    <?php include 'modules/header.php'; ?> 
  </header>

  <nav>    
  <?php 
      $page = 'contact';
      include 'modules/nav.php'; ?>       
  </nav>
    
<main>
    <h1>Contact</h1>
     <label>Get in touch with us to learn more about us, our services, or to find out how to best enjoy your vacation, we are willing and ready to help you on your adventure, go ahead, type something to us!</label>

    <br><br>
<br><br>

    
<form action="thankyou.php" method="post">
  <ul class="flex-outer">
    <li>
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Enter your complete name" required>
    </li>
    <li>
      <label for="email">E-mail</label>
      <input type="email" id="email" name="email" placeholder="joe@salmonriver.com">
    </li>
    <li>
      <label for="phone">Phone Numer</label>
      <input type="tel" id="phone" required>
    </li>    
    <li>
      <label for="message">Message</label>
      <textarea rows="6" id="message" placeholder="Go ahead and type your message here."></textarea>
    </li>

    <li>
      <button type="submit">Submit</button>
    </li>
  </ul>
</form>     

        <br><br><h2>Our Address</h2><br><br>
    <iframe
  width="100%"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD57OjNzbXjUEvx9KydQO_1UivR7GzFMJ8
    &q=1000+S+Main+St,+Riggins,+Idaho" allowfullscreen>
</iframe>
    <br><br><br><br>
</main>
    
  <footer>
      <?php include 'modules/footer.php'; ?> 
  </footer>

  <script src="scripts/hamburger.js"></script> 
    <script src="scripts/stormcenter.js"></script> 
</body></html>