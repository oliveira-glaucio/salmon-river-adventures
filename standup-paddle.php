<!DOCTYPE html>
<html lang="en-us">
  <head>
      <?php 
      $title = 'Stand-Up Paddle';
      include 'modules/head.php'; ?> 
  </head>
<body>

  <header>
      <?php include 'modules/header.php'; ?> 
  </header>

  <nav>    
  <?php
      $page = 'standup-paddle';
      include 'modules/nav.php'; ?>       
  </nav>

    
  <main>
    <h4>Trips > Stand-Up Paddle</h4>

    <article>

        <h3>Stand-Up Paddle</h3>	
    
        <p class="town-article">
        <img src="images/article-paddle.jpg" alt="Breaking News From Franklin">
        Stand up paddle surfing and stand up paddle boarding (SUP) is an offshoot of surfing that originated in Hawaii. Unlike traditional surfing where the rider sits until a wave comes, stand up paddle boarders stand on their boards and use a paddle to propel themselves through the water. The sport was documented in a 2013 report that identified it as the outdoor sporting activity with the most first-time participants in the United States that year. Variations include flat water paddling for outdoor recreation, fitness, or sightseeing, racing on lakes, large rivers and canals, surfing on ocean waves, paddling in river rapids (whitewater SUP), Paddle board yoga and even fishing.
      </p>

        <div class="displayInfo">
            <label>Length:</label><b>2 hour</b><br>
            <label>Skill Level:</label><b>Beginner</b><br>
            <label>Cost:</label><b>$80.00</b><br>        
        </div>
        <br>

        <form action="reservation.php" method="get">
        <button type="submit">Make a Reservation</button>
        </form> 
        
		</article>		  
  </main>
    
  <footer>
      <?php include 'modules/footer.php'; ?> 
  </footer>

  <script src="scripts/hamburger.js"></script>
  <script src="scripts/windchill.js"></script>
  

</body></html>