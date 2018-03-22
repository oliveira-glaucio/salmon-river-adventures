<!DOCTYPE html>
<html lang="en-us">
  <head>
      <?php 
      $title = 'Franklin';
      include 'modules/head.php'; ?> 
  </head>
<body>

  <header>
      <?php include 'modules/header.php'; ?> 
  </header>

  <nav>    
  <?php
      $page = 'franklin';
      include 'modules/nav.php'; ?>       
  </nav>

    
  <main>
    <h2>The City of Franklin Weather</h2>
<picture>
<source media="(min-width: 1024px)" srcset="images/franklin_large.jpg">
<source media="(min-width: 600px)" srcset="images/franklin_medium.jpg">
<source media="(min-width: 320px)" srcset="images/franklin_small.jpg">
<img src="images/franklin_medium.jpg" alt="Franklin Image">
</picture>
    <section class="summary">        
      <h3>Weather Summary</h3>    
      <div class="current">          
        <picture>
            <img src="images/sunny.png" alt="Sunny Day">
        </picture>
          <strong>Sunny</strong>
      </div>     
      <div class="highlow">
        <p>High: <strong><label id="high">90</label>°F</strong></p>  
        <p>Low: <strong><label id="low">66</label>°F</strong></p>  
      </div>  
      <div class="conditions">
        <p>Precipitation: <strong>0%</strong></p>  
        <p>Wind Speed: <strong><label id="wind">5</label>mph SW</strong></p>  
        <p>Wind Chill Factor: <strong><label id="chill"></label>°F</strong></p>            
      </div>           
    </section>
        
    <section class="forecast">
      <h3>10 Day Forecast</h3>
      <table>
	    <thead>
          <tr>
            <th>Day 1</th>
            <th>Day 2</th>
            <th>Day 3</th>
            <th>Day 4</th>
            <th>Day 5</th>
            <th>Day 6</th>
            <th>Day 7</th>
            <th>Day 8</th>
            <th>Day 9</th>
            <th>Day 10</th>
          </tr>
		</thead>
        <tbody>  
          <tr>
            <td>89°F</td>
            <td>87°F</td>
            <td>78°F</td>
            <td>75°F</td>
            <td>72°F</td>
            <td>72°F</td>
            <td>79°F</td>
            <td>83°F</td>
            <td>85°F</td>
            <td>89°F</td>
          </tr>
		</tbody>
      </table>
    </section>
      
    <article>
      <h3>Franklin Breaks Record</h3>	
      <p class="town-article">
        <img src="images/franklin.jpg" alt="Breaking News From Franklin">
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore <strong>veritatis et quasi architecto</strong> beatae vitae dicta sunt explicabo. <br>
          
        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat.
      </p>
		</article>		  
  
  </main>
    
  <footer>
      <?php include 'modules/footer.php'; ?> 
  </footer>

  <script src="scripts/hamburger.js"></script>
  <script src="scripts/windchill.js"></script>
  

</body></html>