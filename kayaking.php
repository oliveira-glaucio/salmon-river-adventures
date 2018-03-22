<!DOCTYPE html>
<html lang="en-us">
  <head>
      <?php 
      $title = 'Kayaking';
      include 'modules/head.php'; ?> 
  </head>
<body>

  <header>
      <?php include 'modules/header.php'; ?> 
  </header>

  <nav>    
  <?php
      $page = 'kayaking';
      include 'modules/nav.php'; ?>       
  </nav>

    
  <main>
    <h4>Trips > Kayaking</h4>

    <article>

        <h3>Kayaking</h3>	
    
        <p class="town-article">
        <img src="images/article-kayaking.jpg" alt="Kayaking">
        Kayaking is the use of a kayak for moving across water. It is distinguished from canoeing by the sitting position of the paddler and the number of blades on the paddle. A kayak is a low-to-the-water, canoe-like boat in which the paddler sits facing forward, legs in front, using a double-bladed paddle to pull front-to-back on one side and then the other in rotation. Most kayaks have closed decks, although sit-on-top and inflatable kayaks are growing in popularity as well<br>
            <br>
            Kayaks were created thousands of years ago by the Inuit, formerly known as Eskimos, of the northern Arctic regions. They used driftwood and sometimes the skeleton of whale, to construct the frame of the kayak, and animal skin, particularly seal skin was used to create the body. The main purpose for creating the kayak, which literally translates to "hunter's boat" was for hunting and fishing.[3] The kayak's stealth capabilities, allowed for the hunter to sneak up behind animals on the shoreline, and successfully catch their prey. By the mid-1800s the kayak became increasingly popular and the Europeans became interested
      </p>
        
        <div class="displayInfo">
            <label>Length:</label><b>1 hour</b><br>
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