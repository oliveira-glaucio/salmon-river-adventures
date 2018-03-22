<!DOCTYPE html>
<html lang="en-us">
<head>
  <?php 
  $title = 'Gallery';
  include 'modules/head.php'; ?> 
</head>
<body>

  <header>
    <?php include 'modules/header.php'; ?> 
  </header>

  <nav>    
  <?php 
      $page = 'gallery';
      include 'modules/nav.php'; ?>       
  </nav>
    
  <main>
    <h2>Gallery</h2>
<div class="gallery">
    <div><img alt="Sunny Day!" src="images/gallery/fall.jpg">
    <p>Lorem ipsum dolor sit amet, consectetur</p>
    </div>
        <div><img alt="Sunny Day!" src="images/gallery/forest.jpg">
    <p>cillum dolore eu fugiat nulla</p>
    </div>
        <div><img alt="Sunny Day!" src="images/gallery/rain.jpg">
    <p>consequuntur magni dolores</p>
    </div>
        <div><img alt="Sunny Day!" src="images/gallery/snow.png">
    <p>ipsum quia dolor sit amet</p>
    </div>
        <div><img alt="Sunny Day!" src="images/gallery/summer.jpg">
    <p>nisi ut aliquid ex ea</p>
    </div>
        <div><img alt="Sunny Day!" src="images/gallery/rain2.jpg">
    <p>enim ad minima veniam</p>
    </div>
</div>
  </main>
    
  <footer>
      <?php include 'modules/footer.php'; ?> 
  </footer>

  <script src="scripts/hamburger.js"></script> 
</body></html>