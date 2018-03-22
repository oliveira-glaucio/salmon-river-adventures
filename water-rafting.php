<!DOCTYPE html>
<html lang="en-us">
  <head>
      <?php 
      $title = 'Water Rafting';
      include 'modules/head.php'; ?> 
  </head>
<body>

  <header>
      <?php include 'modules/header.php'; ?> 
  </header>

  <nav>    
  <?php
      $page = 'water-rafting';
      include 'modules/nav.php'; ?>       
  </nav>

    
  <main>
    <h4>Trips > Water Rafting</h4>

    <article>

        <h3>Water Rafting</h3>	
    
        <p class="town-article">
        <img src="images/article-rafting.jpg" alt="White water Rafting">
        Rafting and white water rafting are recreational outdoor activities which use an inflatable raft to navigate a river or other body of water. This is often done on whitewater or different degrees of rough water. Dealing with risk and the need for teamwork is often a part of the experience. This activity as a leisure sport has become popular since the 1950s, if not earlier, evolving from individuals paddling 10 feet (3.0 m) to 14 feet (4.3 m) rafts with double-bladed paddles or oars to multi-person rafts propelled by single-bladed paddles and steered by a person at the stern, or by the use of oars. Rafting on some sections of rivers is considered an extreme sport, and can be fatal, while other sections are not so extreme or difficult. The International Rafting Federation, often referred to as the IRF, is the worldwide body which oversees all aspects of the sport. <br>
          
        
      </p>
        
        <div class="displayInfo">
            <label>Length:</label><b>1 hour</b><br>
            <label>Skill Level:</label><b>Experienced</b><br>
            <label>Cost:</label><b>$90.00</b><br>        
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